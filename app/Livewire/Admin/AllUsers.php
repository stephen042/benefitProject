<?php

namespace App\Livewire\Admin;

use App\Models\User;
use App\Mail\AppMail;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Mail;

class AllUsers extends Component
{
    use WithPagination;

    // Use Tailwind pagination styling if needed
    protected $paginationTheme = 'tailwind';

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return $this->dispatch('notify', 'User Deleted', 'success');
    }

    public function activateUser($id)
    {
        $user = User::find($id);
        $user->account_hold = 2;
        $result = $user->save();

        // Only send welcome email if the user has not verified their email (i.e., is a new user)
        if ($result && is_null($user->email_verified_at)) {
            $app = config('app.name');
            $userEmail = $user->email;

            $full_name = $user->name;
            $subject = "Account Activated";

            $bodyUser = [
                "name" => $full_name,
                "title" => "Account Activated",
                "message" => "
                    <p>Congratulations, $full_name! Your $app crypto wallet account has been successfully activated and is ready for use.</p>
                    <p><strong>Your login details:</strong></p>
                    <p>Email: <span style='color:#007bff;'>$userEmail</span></p>
                    <p>Password: <span style='color:#007bff;'>user123</span></p>
                    <p>For your security, please <strong>log in and change your password immediately</strong>. Accounts that do not update their password within 24 hours will be deactivated for your protection.</p>
                    <div style='margin:20px 0; text-align:center;'>
                        <a href='" . url("$app/login") . "' style='background:#007bff;color:#fff;padding:12px 28px;border-radius:6px;text-decoration:none;font-weight:bold;display:inline-block;'>Login Now</a>
                    </div>
                    <p>Welcome to $app! If you need any help, our support team is always here for you.</p>
                ",
            ];
            $bodyAdmin = [
                "name" => "Admin",
                "title" => "New Account Activated",
                "message" => "Hello Admin, a new account has been activated for $full_name on $app. Please reach out to the user at $userEmail to provide assistance if needed.",
            ];

            try {
                // user email
                Mail::to($userEmail)->send(new AppMail($subject, $bodyUser));

                // Admin email
                Mail::to(config('app.Admin_email'))->send(new AppMail($subject, $bodyAdmin));
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
        return $this->dispatch('notify', 'User Activated', 'success');
    }
    public function deactivateUser($id)
    {
        $user = User::find($id);
        $user->account_hold = 1;
        $user->save();
        return $this->dispatch('notify', 'User Deactivated', 'success');
    }

    public function render()
    {
        // Retrieve only 10 users per page
        $users = User::where('role', 0)->orderByDesc('created_at')->paginate(10);

        return view('livewire.admin.all-users', [
            "users" => $users
        ]);
    }
}
