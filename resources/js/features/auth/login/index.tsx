import { Logo } from '@/assets/logo';
import { LoginForm } from './componenets/login-form';

export function Login() {
    return (
        <div className="flex min-h-svh w-full items-center justify-center p-6 md:p-10">
            <div className="w-full max-w-md">
                <div className="mb-8 flex justify-center">
                    <Logo className="size-15" />
                </div>
                <LoginForm />
            </div>
        </div>
    );
}
