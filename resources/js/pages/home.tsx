import { Button } from '@/components/ui/button';
import { Form, usePage } from '@inertiajs/react';

type HomePageProps = {
    auth: {
        user: {
            data: {
                name_ar: string;
            };
        };
    };
};

const Home = () => {
    const { auth } = usePage<HomePageProps>().props;
    return (
        <div>
            Welcome {auth.user.data.name_ar}
            <Form action="/logout" method="post">
                <Button>Log out</Button>
            </Form>
        </div>
    );
};

export default Home;
