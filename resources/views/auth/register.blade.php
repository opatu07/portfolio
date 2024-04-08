<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">ユーザー登録</h1>

                <form method="POST" action="{{ route('user.register.store') }}" class="mt-10">
                    @csrf
                    <!--ユーザーネーム-->

                    <x-form.label name="ユーザーネーム"/>  
                        <input class="border border-gray-200 p-2 w-full rounded"
                            name="username"
                            id="username"
                        >

                    <x-form.error name="username"/>
                    
                    <!--メールアドレス-->
                    
                    <div class="py-2">
                      <x-form.label name="メールアドレス"/>  
                          <input class="border border-gray-200 p-2 w-full rounded"
                              name="email"
                              id="email"
                              type="email"
                          >
                      <x-form.error name="email"/>
                    </div>

                    
                    <!--パスワード-->

                    <div class="pt-2">
                        <x-form.label name="パスワード"/>  
                            <input class="border border-gray-200 p-2 w-full rounded"
                                name="password"
                                id="password"
                                type="password"
                            >
                        <x-form.error name="password"/>
                    </div>
                    
                    <x-form.button>登録！</x-form.button>

                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
