<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
    
    <title>Credit</title>
</head>
<body>
    <div class="container mx-auto p-4">
        <div class="container">
            <h1 class="text-3xl">Étape du credit</h1>
            <form method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('form.storeStep2') }}">
                @csrf
                <!-- Champs de saisie pour la première étape -->
                <div>
                    <label for="" class="block text-gray-700 text-sm font-bold mb-2">Montant</label>
                    <input type="text" id="" name="montant" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div>
                    <label for="" class="block text-gray-700 text-sm font-bold mb-2">Garantie</label>
                    <input type="text" id="" name="garantie" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div>
                    <label for="" class="block text-gray-700 text-sm font-bold mb-2">Source de revenu</label>
                    <input type="text" id="" name="sourceRevenu" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <br>
                        <div>
                            <select name="category" id="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">Produit</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
        
                            </select>
                        </div>
                        <br>
                        <div>
                            <select name="category" id="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">Frequence</option>
                                <option value="">mensuel</option>
                                <option value="">semestriel</option>
        
                            </select>
                        </div>
                    <br>
                    <div>
                        <select name="category" id="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="">Status</option>
                            <option value="">1</option>
                            <option value="">2</option>
    
                        </select>
                    </div>
                <br>
                <div>
                    <label for="" class="block text-gray-700 text-sm font-bold mb-2">Date de debut</label>
                    <input type="date" id="" name="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <br>
                <div>
                    <label for="" class="block text-gray-700 text-sm font-bold mb-2">Date de fin</label>
                    <input type="date" id="" name="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <br>
                <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Étape suivante</button>
            </div>
            </form>
        </div>
        

        
</body>
</html>
