<x-app-layout>
    <section>
        <div class="flex justify-center content-center py-2">
            <div class="logo" style="max-width: 8em;">
                <img src="{{$logo}}" />
            </div>
        </div>
        <div class="ml-4">
            <h2 style="font-weight: 900">Vous souhaitez commander ?</h2>
            <p class="py-4">Une envie de plats ?</p>
        </div>
        <div class="mx-auto scrolling-wrapper">
            @foreach($categories as $categorie)

                <div onclick="location.href='{{ route('product', $categorie->id) }}';" class="cards p-6 bg-white border-b border-gray-200 text-center ml-4 rounded-lg" style="margin-right: 16px; box-shadow: 3px 5px 5px #00000024;">
                    <img src="{{$categorie->image}}" style="width: 100px; margin-left: auto; margin-right: auto;"/>
                    <p>{{$categorie->category_name}}</p>
                </div>
            @endforeach
        </div>
        <div class="ml-4">
            <p class="py-4">Une petite soif ?</p>
        </div>
        <div class="mx-auto scrolling-wrapper">
            @foreach($categories as $categorie)

                <div class="cards p-6 bg-white border-b border-gray-200 text-center ml-4 rounded-lg" style="margin-right: 16px; box-shadow: 3px 5px 5px #00000024;">
                    <img src="{{$categorie->image}}" style="width: 100px"/>
                    {{$categorie->category_name}}
                </div>
            @endforeach
        </div>
    </section>

    <style>
        .scrolling-wrapper{
            overflow-x: scroll;
            overflow-y: hidden;
            white-space: nowrap;
            padding: 6px;
        }
        .cards {
            display: inline-block;
            /* max-width: 126px; */
        }
    </style>
</x-app-layout>
