
				<div class="flex justify-between space-x-10">
					<div class="basis-1/2 bg-white relative rounded-xl">

						<div class="bg-[#FFF5EE] h-[300px] w-full rounded-lg">
                       	 	<?php kr_post_thumbnail(); ?>
						</div>
					
                            <!-- <img src="http://localhost:8000/wp-content/uploads/2022/07/removal.ai_tmp-62c93604aa635.png" class="w-full p-10 mx-auto h-auto absolute inset-0" /> -->
                        
					</div>

					<div class="basis-1/2 flex-col px-16">
						<h5 class="text-sm px-2 py-1 rounded-sm bg-slate-200 mb-2 inline-block tracking-tight text-slate-500"><?php echo get_post_meta( get_the_ID(), 'variant_title', true ); ?></h5>
			
                        <header class="entry-header">
		                    <?php the_title( '<h1 class="text-4xl font-bold mb-7">', '</h1>' ); ?>
	                    </header><!-- .entry-header -->
                        
                        <article class="prose prose-base text-gray-600 font-light">
                        	<?php the_content(); ?> 
						</article>

						<div class="flex justify-start items-center mt-24 space-x-4">
							<a class="bg-orange-400 rounded-md px-5 py-3 text-white text-sm" href="#">Get Inquiry</a>
							<span>or</span>
							<button class="bg-transparent rounded-md px-5 py-3 border border-gray-500 text-sm">Download Brocure</button>
						</div>
					</div>

				</div>

				<div class="mt-20">
					<h1 class="text-2xl font-bold mb-5 border-b-[1px] border-gray-200 pb-3">Product Variants</h1>


						<div class="grid grid-cols-4 gap-6 mt-10">
							<?php
								$variants = get_post_meta( get_the_ID(), 'variant_group', true );

								foreach ( (array) $variants as $key => $variant ) {
									
									
									echo '<div class="shadow-md p-4 rounded-lg">';
									echo '<h1 class="text-base font-semibold text-gray-700 mb-2">' . ($variant['variant_title']) . '</h1>';
									echo '<p class="text-base text-gray-500 font-light">' . ($variant['variant_detail']) .'</p>';

									echo '</div>';


								}
							?>
						</div>						
					
				</div>
				



				





				

			