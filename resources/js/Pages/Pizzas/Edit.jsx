import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import UpdatePizzaOrderForm from './Partials/UpdatePizzaOrderForm';

export default function Edit({ auth, pizza }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={
                <h2 className='text-xl font-semibold leading-tight text-gray-800'>
                    Order #{pizza.id}
                </h2>
            }
        >

            <Head title={'Order #' + pizza.id} />

            <div className='py-12'>
                <div className='mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8'>
                    <div className='p-4 bg-white shadow sm:p-8 sm:rounded-lg'>
                        <UpdatePizzaOrderForm pizza={pizza} className='max-w-xl' />
                    </div>
                </div>
            </div>

        </AuthenticatedLayout>
    )
}