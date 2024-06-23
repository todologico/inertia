<script setup>
import AppLayoutPanel from '@/Layouts/AppLayoutPanel.vue';
import { useForm } from '@inertiajs/vue3'; // Importamos el hook useForm de Inertia.js
import { ref, defineProps } from 'vue'; // Importamos ref y defineProps de Vue 3

// Definimos las props recibidas por el componente
const props = defineProps(['products','flag']);

// Creamos refs para los datos reactivos
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
                                                    <h3 class="mb-4 lg:mb-0">Products {{ flag }}</h3>
                                                </div>

												<div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4 mb-6">
													<div class="card card-border">
														<div class="card-body">
															<div class="flex justify-between items-center">
																<div class="flex items-center gap-4">
																	<span class="avatar avatar-rounded !bg-indigo-600 text-2xl" data-avatar-size="55">
																		<span
																			class="avatar-icon">
																			<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																				<path stroke-linecap="round" stroke-linejoin="round"
																					d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
																				</path>
																			</svg>
																		</span>
																	</span>
																	<div>
																		<span>Total Customers</span>
																		<h3>
																			<span>2,420</span>
																		</h3>
																	</div>
																</div>
																<div class="tag gap-1 font-bold border-0 text-emerald-600 dark:text-emerald-400 bg-emerald-100 dark:bg-emerald-500/20">
																	<span>
																		<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																			<path fill-rule="evenodd" d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
																		</svg>
																	</span>
																	<span>17.2%</span>
																</div>
															</div>
														</div>
													</div>
													<div class="card card-border">
														<div class="card-body">
															<div class="flex justify-between items-center">
																<div class="flex items-center gap-4">
																	<span class="avatar avatar-rounded !bg-blue-500 text-2xl" data-avatar-size="55">
																		<span class="avatar-icon">
																			<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																				<path stroke-linecap="round" stroke-linejoin="round"
																					d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
																				</path>
																			</svg>
																		</span>
																	</span>
																	<div>
																		<span>Active Customers</span>
																		<h3>
																			<span>1,897</span>
																		</h3>
																	</div>
																</div>
																<div class="tag gap-1 font-bold border-0 text-emerald-600 dark:text-emerald-400 bg-emerald-100 dark:bg-emerald-500/20">
																	<span>
																		<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																			<path fill-rule="evenodd" d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
																		</svg>
																	</span>
																	<span>32.7%</span>
																</div>
															</div>
														</div>
													</div>
													<div class="card card-border" role="presentation">
														<div class="card-body">
															<div class="flex justify-between items-center">
																<div class="tag gap-1 font-bold border-0">	
																	<div class="form-item inline">
                                                                        <label class="form-label h-11 ltr:pr-2 rtl:pl-2">Search: &nbsp;</label>
                                                                        <div>
																			<form @submit.prevent="handleSubmit">
																			<!-- Campo de búsqueda -->
																			{{ search }}<br>
																			<input class="input" v-model="form.search" maxlength="30" type="text" placeholder="Your search">
																			<div v-if="form.errors.search">{{ form.errors.search }}</div>
																			
																			<!-- Botón de búsqueda -->
																			<button type="submit" :disabled="form.processing">Buscar</button>
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