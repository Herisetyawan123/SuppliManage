<div class="w-full h-screen flex justify-center items-center bg-gray-300">

    <!-- card login -->
    <div class="w-[30%] bg-white rounded overflow-hidden">
        <!-- card header -->
        <div class="w-full p-6 bg-gray-200">
            <h1 class="text-xl font-bold">Login</h1>
        </div>

        <!-- card body -->
        <div class="p-6">
            <form action="/auth/register" method="post" class="flex flex-col gap-3">
                <!-- form group -->
                <div class="flex flex-col gap-2">
                    <label for="" class="font-normal">Email</label>
                    <input type="email" name="email" class="border px-3 py-1 focus:ring-1 focus:ring-purple-600 focus:outline-none rounded">
                </div>

                <!-- form group -->
                <div class="flex flex-col gap-2">
                    <label for="" class="font-normal">Password</label>
                    <input type="password" name="password" class="border px-3 py-1 focus:ring-1 focus:ring-purple-600 focus:outline-none rounded">
                </div>

                <button class="px-3 py-1 bg-blue-800 rounded text-white">Submit</button>
                <a href="/auth/signup">Haven't account ?</a>
            </form>
        </div>

    </div>
</div>