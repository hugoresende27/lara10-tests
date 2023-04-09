<x-guest-layout>
    <main class="container p-6 mx-auto shadow">
        <section class="p-2">

            <header class="text-center">
                <h1 class="text-2xl font-bold text-red-500">
                    Many to Many relationship
                </h1>
            </header>


            <div>
                @foreach($groups as $group)
                    <h2>{{$group->name}}</h2>
                    @foreach($group->users as $user)
                        <h2>{{$user->name}}</h2>
                        <div class=" {{$user->community->active ? "text-xs" : "text-lg"}}">
                            {{$user->community->active ? "Active" : "Not Active"}}
                        </div>
                        <span class="text-xs">Joined Date : {{$user->community->created_at->format('d/m/y')}}</span>
                    @endforeach
                @endforeach
            </div>

        </section>
    </main>
</x-guest-layout>
