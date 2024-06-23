<script setup>
import AppLayoutPanel from '@/Layouts/AppLayoutPanel.vue';
import { useForm } from '@inertiajs/vue3'; // Importamos el hook useForm de Inertia.js
import { ref, defineProps } from 'vue'; // Importamos ref y defineProps de Vue 3

// Definimos las props recibidas por el componente
const props = defineProps(['products','flag']);

const search = ref('');

// Configuramos el formulario con useForm
const form = useForm({
  search: null // Inicializamos el campo 'search' en el formulario
});

// Función para manejar el envío del formulario
const handleSubmit = () => {
  form.post(route('search'), {
    // Datos a enviar en la solicitud POST
    search: search.value
  });
};

</script>

<template>

    <AppLayoutPanel>

        <!-- Content start -->
							<div class="h-full">
								<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
                                    <div class="container mx-auto">
                                        <div class="card adaptable-card">
                                            <div class="card-body">
                                                <div class="lg:flex items-center justify-between mb-4">
                                                    <h3 class="mb-4 lg:mb-0">Products - Search: {{ form.search }}</h3>
                                                </div>

												<div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4 mb-6">


													<div class="card card-border" role="presentation">
														<div class="card-body">
															<div class="flex justify-between items-center">
																<div class="tag gap-1 font-bold border-0">	
																	<div class="form-item inline">
                                                                        
                                                                        <div>
																			<form @submit.prevent="handleSubmit">
																			<input class="input" v-model="form.search" maxlength="30" type="text" placeholder="Your search">
																			<div v-if="form.errors.search">{{ form.errors.search }}</div>
																			
																			<!-- Botón de búsqueda -->
																			<span style="padding-left: 10px;"><button type="submit" :disabled="form.processing">SEARCH</button></span>
																		    </form>
																		</div>																		
                                                                    </div>
																</div>
															</div>
														</div>
													</div>
												</div>


                                                <div class="overflow-x-auto">
                                                    <table id="product-list-data-table" class="table-default table-hover data-table">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Code</th>
                                                                <th>Product</th>
                                                                <th>price</th>
                                                                <th>Title1</th>
                                                                <th>Title2</th>
                                                                <th>Image1</th>
                                                                <th>Image2</th>
                                                                <th>Stock</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                  
                                                            <tr v-for="product in products" :key="product.prod1_id">

                                                                <td><span class="capitalize">{{ product.prod1_id }}</span></td>
                                                               
                                                                <td><span class="capitalize">{{ product.prod1_code }}</span></td>                      
                                                                
                                                                <td><span class="capitalize">{{ product.prod1_product }}</span></td>

                                                                <td><span class="capitalize">$AR {{ product.prod1_price1 }}</span></td>

                                                                <td><span class="capitalize">{{ product.prod1_title1 }}</span></td>

                                                                <td><span class="capitalize">{{ product.prod1_title2 }}</span></td>

                                                                <td><span class="capitalize">{{ product.prod1_image1 }}</span></td>

                                                                <td><span class="capitalize">{{ product.prod1_image2 }}</span></td>                                                        
                                                               
                                                                <td>
                                                                    <div class="flex items-center gap-2">
                                                                        <span class="badge-dot bg-emerald-500"></span>
                                                                        <span class="capitalize font-semibold text-emerald-500">In Stock</span>
                                                                    </div>
                                                                </td>
                                                               
                                                                <td>
                                                                    <div class="flex justify-end text-lg">
                                                                        <span class="cursor-pointer p-2 hover:text-indigo-600">
                                                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <span class="cursor-pointer p-2 hover:text-red-500">
                                                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>	
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
							</div>                       
    </AppLayoutPanel>
</template>