<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
    
    <title>Epargne</title>
</head>
<body>
    <div class="container mx-auto p-4">
        <div class="container">
            <h1 class="text-3xl">Étape epargne</h1>
            <form method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('form.storeStep3') }}">
                @csrf
                <!-- Champs de saisie pour la première étape -->
                <div>
                    <label for="field1" class="block text-gray-700 text-sm font-bold mb-2">Nom</label>
                    <input type="text" id="field1" name="field1" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div>
                    <label for="field2" class="block text-gray-700 text-sm font-bold mb-2">Ayant droit</label>
                    <input type="text" id="field2" name="field2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <br>
                <div>
                    <select name="category" id="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Type</option>
                        <option value="">1</option>
                        <option value="">2</option>

                    </select>
                </div>
            <br>
                <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Étape suivante</button>
            </div>
            </form>
        </div>
        

        
</body>
</html>
