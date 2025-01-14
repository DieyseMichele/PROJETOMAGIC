@extends("templates.popup")

@section("titulo", "Cards")

@section("content")
	<div class="container px-6 my-6 grid">
		<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300" >
			Cards do Deck: 
		</h4></br>		
			</br>
			<div class="w-full overflow-hidden rounded-lg shadow-xs">
            
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap ">
                        <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">

                            <th class="px-4 py-3">Imagem</th>
                            <th class="px-4 py-3">Nome</th>                           
                            <th class="px-4 py-3">Mana</th>
                            <th class="px-4 py-3">Raridade</th>                            
                            <th class="px-4 py-3">Disponibilidade</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($cardDecks as $cardDeck)
							@foreach($cds as $c)
								@if($c->deck_id == $cardDeck->deck)
								<tr class="text-gray-700 dark:text-gray-400">
									<td class="px-4 py-3">
									<div class="flex items-center text-sm">
										<!-- Avatar with inset shadow -->
										@if (isset($c->imageUrl))
										<div class="dropdown relative hidden w-8 h-8 mr-3 rounded-full md:block">
											<img class="object-cover w-full h-full rounded-full"
												src="{{$c->imageUrl}}" alt="{{ $c->name }}" width="100" loading="lazy"
											/>
											<div class="dropdown-content ">
											<img src="{{$c->imageUrl}}" alt="{{ $c->name }}" >
											</div>
											<div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
										</div>
										@endif
									</div>
									</td>
									<td class="px-4 py-3 text-sm ">
									<p class="font-semibold">{{ $c->name }}</p>
									</td>
									<td class="px-4 py-3 text-sm ">
									{{ $c->manaCost }}
									</td>
									<td class="px-4 py-3 text-sm ">
									{{ $c->rarity }}
									</td>
									<td class="px-4 py-3 text-sm ">
									@if($c->disponivel==1)
										<span
									  class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
										>
										Disponível
									</span>
									@else
									<span
										class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700"
									>
										Indisponível
									</span>
									@endif
									</td>								
									
								</tr>
								@endif
							@endforeach
                        @endforeach
						
                        </tbody>
                    </table>
             </div>			   
		</div>
	</div>
	
@endsection