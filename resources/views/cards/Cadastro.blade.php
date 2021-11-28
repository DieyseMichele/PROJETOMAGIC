@extends("templates.templateAdmin")

@section("content")
	
	<div class="container px-6 my-6 grid">
		<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300" >
			Cadastrar Cards em unidade:
		</h4>
		<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800" >
			<form action="/cadastrarCard" method="POST" enctype="multipart/form-data">
				<label class="block text-sm">
					<span class="text-gray-700 dark:text-gray-400">ID:</span>
					<input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
					  type="text" name="id_data" placeholder="Digite o ID do card '86bf43b1-8d4e-4759-bb2d-0b2e03ba7012'"
					  value="{{ $card->multiverseid }}"/>
				</label>
				</br>

				</br>
				<label class="block text-sm">
					<span class="text-gray-700 dark:text-gray-400">Nome do card:</span>
					<input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
					   type="text" name="name" placeholder="Static Orb" value="{{ $card->name }}"/>
				</label>
				</br>
				<label class="block text-sm">
					<span class="text-gray-700 dark:text-gray-400">Mana:</span>
					<input class="block w-g mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
						type="text" name="released_at" placeholder="2001-04-11" value="{{ $card->manaCost }}"/>
				</label>
				</br>
				<label class="block text-sm">
					<span class="text-gray-700 dark:text-gray-400">Imagem:</span>
					<input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
						type="text" name="image_uris" placeholder="Digite a url da imagem" value="{{ $card->imageUrl }}"/>
				</label>
				</br>
				
				</br>
				<label class="block text-sm">
					<span class="text-gray-700 dark:text-gray-400">Quantidade:</span>
					<input class="block w-g mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
						type="number" name="quantidade" placeholder="Digite a quantidade de cartas" value=""/>
				</label>
				</br>
				<label class="block text-sm">
					<span class="text-gray-700 dark:text-gray-400">Este card está disponível?</span>
					<input type="radio" name="disponivel" value="1" class="js-advanced-search-toggle form-radio" />
					<span class="text-gray-700 dark:text-gray-400">Sim</span>
					<input type="radio" name="disponivel" value="0" class="js-advanced-search-toggle form-radio" />
					<span class="text-gray-700 dark:text-gray-400">Não</span>
				</label>
				</br>
				<button type="reset" class="px-4 py-2 font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red" >
                  Cancelar
                </button>
				@csrf
				<input type="hidden" name="id" value="{{ $card->idmultiverseid }}" />
				<button class="px-4 py-2 font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue" >
                  Salvar    
                </button>		
			</form>
			
		</div>
	</div>
<script>
	
	
</script>
@endsection