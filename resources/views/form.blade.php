<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <title>Client</title>
</head>
<body>
    <div class="container mx-auto p-4">
        <div class="container">
            <h1 class="text-3xl">Étape client</h1>
            <form method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('form.store') }}">
                @csrf
                <!-- Champs de saisie pour la première étape -->
                <div>
                    <div>
                        <label for="field1" class="block text-gray-700 text-sm font-bold mb-2">Nom</label>
                        <input type="text" id="" name="nom" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div>
                        <label for="field2" class="block text-gray-700 text-sm font-bold mb-2">Prenom</label>
                        <input type="text" id="" name="prenom" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div>
                        <label for="" class="block text-gray-700 text-sm font-bold mb-2">Code</label>
                        <input type="number" id="" name="code" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div>
                        <label for="" class="block text-gray-700 text-sm font-bold mb-2">Fiche</label>
                        <input type="number" id="" name="fiche" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div>
                        <label for="" class="block text-gray-700 text-sm font-bold mb-2">Telephone</label>
                        <input type="number" id="" name="telephone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div><br>
                    <div>
                        <select name="province" data="commune" id="option" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            
                            <option value="">Selectionner la province</option>
                            {{-- {{dd($provinces)}} --}}
                            
                            @foreach ($provinces as $province)
                            <option value="{{$province->ID_PROVINCE}}">{{$province->NOM}} </option>
                            @endforeach
                            
    
                        </select>
                    </div>  <br>
                </div>
                
                <div>
                    <div>
                        <select name="commune" id="option" data="colline" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            {{-- <option value="">Selectionner la commune</option> --}}
                            
                        </select>
                    </div>
                        <br>
                        <div>
                            
                        <select name="colline" id="option"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            {{-- <option value="">Selectionner la colline</option> --}}
                            
    
                        </select>
                        </div>
                        <div>
                            <label for="" class="block text-gray-700 text-sm font-bold mb-2">Nom cooperative</label>
                            <input type="text" id="" name="nomCooperative" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <br>
                        <div>
                            <select name="category" id="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">Category</option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
        
                            </select>
                        </div>
                        <br>
                        <div>
                            <input type="checkbox" name="" id="" placeholder=""><span> Argricole</span>
                        </div>
                </div>
                    
                    <br>
                <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Étape suivante</button>
            </div>
            </form>
        </div>



<script>

        $('select#option').change(function() {
            var type= $(this).attr('data');
            // alert('ok');
            // console.log(type);
            
            if (type=="commune") {
                $('select#option').eq(1).html(" ");
                $('select#option').eq(2).html(" ");

            }
            else if (type=="colline"){
                $('select#option').eq(2).html(" ");
            }

            $.ajax({
                type: 'GET',
                url: "{{route('option')}}",

                data:{ 
                    type:type,
                    id:$(this).val(),
                },
                
                success: function(data) {
                    // console.log(data);
                    if (type=="commune") {
                    $('select#option').eq(1).append(data);
                    }
                    else if (type=="colline"){
                        $('select#option').eq(2).append(data);
                    }

                    }
                });
        });

        
</script>
        

        
</body>
</html>
