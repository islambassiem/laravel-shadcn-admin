import { IconGoogle } from '@/assets/brand-icons';
import { Button } from '@/components/ui/button';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card';
import { Field, FieldGroup, FieldLabel } from '@/components/ui/field';
import { Input } from '@/components/ui/input';
import { Form } from '@inertiajs/react';
import { cn } from 'cn';

export function LoginForm({ className, ...props }: React.ComponentProps<'div'>) {
    return (
        <div className={cn('flex flex-col gap-6', className)} {...props}>
            <Card>
                <CardHeader className="text-center">
                    <CardTitle>Login to your account</CardTitle>
                    <CardDescription>Enter your email below to login to your account</CardDescription>
                </CardHeader>
                <CardContent>
                    <Form action="/login" method="post">
                        <FieldGroup>
                            <Field>
                                <FieldLabel htmlFor="username">Email or Employee Code</FieldLabel>
                                <Input id="username" type="text" placeholder="emloyee@inaya.edu.sa or 50xxxx" name="username" />
                            </Field>
                            <Field>
                                <div className="flex items-center">
                                    <FieldLabel htmlFor="password">Password</FieldLabel>
                                    <a tabIndex={-1} href="#" className="ml-auto inline-block text-sm underline-offset-4 hover:underline">
                                        Forgot your password?
                                    </a>
                                </div>
                                <Input id="password" type="password" required placeholder="••••••••" name="password" />
                            </Field>
                            <Field>
                                <Button type="submit">Login</Button>
                                <div className="relative my-2">
                                    <div className="absolute inset-0 flex items-center">
                                        <span className="w-full border-t" />
                                    </div>
                                    <div className="relative flex justify-center text-xs uppercase">
                                        <span className="bg-background px-2 text-muted-foreground">Or continue with</span>
                                    </div>
                                </div>
                                <Button variant="outline" type="button">
                                    <IconGoogle className="h-4 w-4" /> Google
                                </Button>
                            </Field>
                        </FieldGroup>
                    </Form>
                </CardContent>
            </Card>
        </div>
    );
}
