<x-app-layout>

    <div class="py-12 text-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
            @foreach($sous_categories as $sous_cat)
                <button class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-11/12" style="box-shadow: 3px 5px 5px #00000024; border-radius:12px;">
                    <div class="p-6 bg-white border-b border-gray-200 text-center containerCards">
                        <img src="{{$sous_cat->photo}}" style="max-width: 125px; max-height: 100px; border-radius: 12px"/>
                        <div class="flex flex-col">
                            <div class="flex items-start flex-col" style="align-items: flex-start">
                                <p class="title">{{$sous_cat->nom}}</p>
                                <p class="ingredient">{{$sous_cat->ingredient}}</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="price">{{$sous_cat->prix}}€</p>
                                <p>--></p>
                            </div>
                        </div>
                    </div>
                </button>
        @endforeach
        </div>
    </div>
</x-app-layout>

<style>
    .containerCards {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    }
    .title {
        font-weight: 800;
        margin-bottom: 4px;
    }
    .ingredient {
        margin-bottom: 12px;
    }
    .price {
        font-weight: 800;
        font-size: 16px;
        color: #FF2C55;
    }
</style>
