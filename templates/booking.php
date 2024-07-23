<?php
/**
 * Template Name:Booking Page
 * 
 * @package Top_Himalaya
*/

get_header();

    $booking_image = get_field( 'booking_image' );
    $nationality   = get_field( 'nationality' );
    $relationship  = get_field( 'relationship' ); ?>

    <main>
        <section class="py-12 md:py-16">
            <div class="container">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <?php 
                        if( $booking_image ){ ?>
                            <picture>
                                <?php echo wp_get_attachment_image( $booking_image['ID'], 'full', false, array( 'class' => 'w-full' ) ); ?>                        
                            </picture>
                            <?php
                        }
                    ?>
                    <form id="booking_form" action="#" method="post" enctype="multipart/form-data">
                        <div class="personalDetail">
                            <h3 class="text-xl sm:text-2xl lg:text-3xl font-semibold leading-[120%]">Personal Detail</h3>
                            <div class="formWrapper mt-4 grid grid-cols-1 gap-3">
                                <div class="form-groups">
                                    <input type="text" name="full_name" class="w-full py-3 px-6 bg-transparent rounded-none border border-neutral-500 outline-none focus:border-primary text-neutral-800" placeholder="Full Name" />
                                </div>

                                <div class="form-groups">
                                    <input type="email" name="email" class="w-full py-3 px-6 bg-transparent rounded-none border border-neutral-500 outline-none focus:border-primary text-neutral-800" placeholder="Email Address" />
                                </div>

                                <div class="form-groups">
                                    <select name="nationality">
                                        <option value="" data-display="Select Nationality">Select Nationality</option>
                                        <?php 
                                            if( $nationality ){
                                                foreach( $nationality as $nation ){ ?>
                                                    <option value="<?php echo esc_attr( $nation['nationality'] ); ?>"><?php echo esc_html( $nation['nationality'] ); ?></option>
                                                    <?php
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-groups">
                                    <input type="text" name="contact_no" class="w-full py-3 px-6 bg-transparent rounded-none border border-neutral-500 outline-none focus:border-primary text-neutral-800" placeholder="Contact No." />
                                </div>
                                
                                <div class="flex flex-wrap justify-between gap-3 md:gap-8">
                                    <div class="w-full sm:flex-1 form-groups">
                                        <input type="text" name="emergency_contact" class="w-full py-3 px-6 bg-transparent rounded-none border border-neutral-500 outline-none focus:border-primary text-neutral-800" placeholder="Emergency contact" />
                                    </div>

                                    <div class="w-full sm:flex-1 form-groups">
                                        <select name="relathioship">
                                            <option value="" data-display="Relationship">Relationship</option>
                                            <?php 
                                                if( $relationship ){
                                                    foreach( $relationship as $relation ){ ?>
                                                        <option value="<?php echo esc_attr( $relation['relationship'] ); ?>"><?php echo esc_html( $relation['relationship'] ); ?></option>
                                                        <?php
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-groups">
                                    <input type="text" name="medical_issue" class="w-full py-3 px-6 bg-transparent rounded-none border border-neutral-500 outline-none focus:border-primary text-neutral-800" placeholder="Do you have any medical issue?" />
                                </div>

                                <div class="flex flex-wrap items-center gap-3 md:gap-6">
                                    <div class="form-groups">
                                        <div class="flex items-center gap-2">
                                            <label for="adult">Adult</label> 
                                            <div class="flex items-center relative">
                                                <input name="adult" id="adult" class="qty-number w-26 py-3 px-6 bg-basewhite rounded-none border border-neutral-500 outline-none focus:border-primary text-neutral-800" type="number" min="1" max="999" value="1" />
                                                <div class="flex flex-col justify-center text-center absolute w-12 h-6 right-1 top-1/2 -translate-y-1/2 bg-basewhite">
                                                    <div class="qty-increase value-button h-3 flex items-center justify-center hover:text-primary" ><span class="icon-chevron-up"></span></div>
                                                    <div class="qty-decrease value-button h-3 flex items-center justify-center hover:text-primary"><span class="icon-chevron-down"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-groups">
                                        <div class="flex items-center gap-2">
                                            <label for="child">Child</label> 
                                            <div class="flex items-center relative">
                                                <input name="child" id="child" class="qty-number w-26 py-3 px-6 bg-basewhite rounded-none border border-neutral-500 outline-none focus:border-primary text-neutral-800" type="number" min="1" max="999" value="1" />
                                                <div class="flex flex-col justify-center text-center absolute w-12 h-6 right-1 top-1/2 -translate-y-1/2 bg-basewhite">
                                                    <div class="qty-increase value-button h-3 flex items-center justify-center hover:text-primary" ><span class="icon-chevron-up"></span></div>
                                                    <div class="qty-decrease value-button h-3 flex items-center justify-center hover:text-primary"><span class="icon-chevron-down"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-groups">
                                        <div class="flex items-center gap-2">
                                            <label for="infant">Infant</label> 
                                            <div class="flex items-center relative">
                                                <input name="infant" id="infant" class="qty-number w-26 py-3 px-6 bg-basewhite rounded-none border border-neutral-500 outline-none focus:border-primary text-neutral-800" type="number" min="1" max="999" value="1" />
                                                <div class="flex flex-col justify-center text-center absolute w-12 h-6 right-1 top-1/2 -translate-y-1/2 bg-basewhite">
                                                    <div class="qty-increase value-button h-3 flex items-center justify-center hover:text-primary" ><span class="icon-chevron-up"></span></div>
                                                    <div class="qty-decrease value-button h-3 flex items-center justify-center hover:text-primary"><span class="icon-chevron-down"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between">
                                    <!-- <span class="inline-block">Your Passport size photo</span>
                                    <button type="button" class="py-2 px-3 uppercase border border-neutral-200 font-bold text-sm leading-[120%] hover:bg-primary hover:border-primary hover:text-white">Upload</button> -->
                                    <label for="pp_size_photo" class="inline-block">Your Passport size photo</label>
                                    <input type="file" id="pp_size_photo" class="file-upload">
                                    <input type="hidden" name="pp_size_photo" class="upload_file">
                                    <div class="error_msg" class="hidden"></div>
                                </div>

                                <div class="flex items-center w-full gap-4">
                                    <span class="inline-block">Are you vegetarian?</span>
                                    <label for="toggle-1" class="flex items-center cursor-pointer">
                                        <input type="checkbox" name="are_you_vegeterain" id="toggle-1" class="sr-only peer toggle-checkbox">
                                        <div class="toggle-btn block relative bg-neutral-200 w-11 h-6 p-0.5 rounded-full before:absolute before:bg-basewhite before:w-5 before:h-5 before:p-0.5 before:rounded-full before:transition-all before:duration-500 before:left-0.5 peer-checked:before:left-[22px] peer-checked:before:bg-primary"></div>
                                    </label>
                                </div>

                                <div class="flex items-center w-full gap-4">
                                    <span class="inline-block">Are you married?</span>
                                        <label for="toggle-2" class="flex items-center cursor-pointer">
                                        <input type="checkbox" name="are_you_married" id="toggle-2" class="sr-only peer toggle-checkbox" checked>
                                        <div class="toggle-btn block relative bg-neutral-200 w-11 h-6 p-0.5 rounded-full before:absolute before:bg-basewhite before:w-5 before:h-5 before:p-0.5 before:rounded-full before:transition-all before:duration-500 before:left-0.5 peer-checked:before:left-[22px] peer-checked:before:bg-primary"></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="tripDetail mt-8">
                            <h3 class="text-xl sm:text-2xl lg:text-3xl font-semibold leading-[120%]">Trip Detail</h3>
                            <div class="formWrapper mt-4 grid grid-cols-1 gap-3">
                                <div class="flex items-center justify-between">
                                    <!-- <span class="inline-block">Your Passport</span>
                                    <button type="button" class="py-2 px-3 uppercase border border-neutral-200 font-bold text-sm leading-[120%] hover:bg-primary hover:border-primary hover:text-white">Upload</button> -->
                                    <label for="passport" class="inline-block">Your Passport</label>
                                    <input type="file" id="passport" class="file-upload">
                                    <input type="hidden" name="passport" class="upload_file">
                                    <div class="error_msg" class="hidden"></div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <!-- <span class="inline-block">Travel Inssurance</span>
                                    <button type="button" class="py-2 px-3 uppercase border border-neutral-200 font-bold text-sm leading-[120%] hover:bg-primary hover:border-primary hover:text-white">Upload</button> -->
                                    <label for="travel_insurance" class="inline-block">Travel Inssurance</label>
                                    <input type="file" id="travel_insurance" class="file-upload">
                                    <input type="hidden" name="travel_insurance" class="upload_file">
                                    <div class="error_msg" class="hidden"></div>
                                </div>

                                <div class="form-groups">
                                    <input type="text" name="passport_no" class="w-full py-3 px-6 bg-transparent rounded-none border border-neutral-500 outline-none focus:border-primary text-neutral-800" placeholder="Passport no" />
                                </div>
                                <div class="flex flex-wrap items-center justify-between gap-3 md:gap-8">
                                    <div class="relative w-full sm:flex-1">
                                        <div class="absolute inset-y-0 end-0 flex items-center pe-4 pointer-events-none"><span class="icon-CalendarDots text-2xl"></span></div>
                                        <input datepicker type="text" name="arrival_date" class="w-full py-3 px-6 bg-transparent rounded-none border border-neutral-500 outline-none focus:border-primary text-neutral-800" placeholder="Arrival Date">
                                    </div>
                                    <div class="relative w-full sm:flex-1">
                                        <div class="absolute inset-y-0 end-0 flex items-center pe-4 pointer-events-none"><span class="icon-CalendarDots text-2xl"></span></div>
                                        <input datepicker type="text" name="departure_date" class="w-full py-3 px-6 bg-transparent rounded-none border border-neutral-500 outline-none focus:border-primary text-neutral-800" placeholder="Departure Date">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="requestDetail mt-8">
                            <h3 class="text-xl sm:text-2xl lg:text-3xl font-semibold leading-[120%]">Request</h3>
                            <p class="mt-3 mb-4">Let us know all your inquiries and we will get back to you shortly</p>
                            <div class="form-groups">
                                <textarea rows="5" name="your_message" class="w-full py-3 px-6 bg-transparent rounded-none border border-neutral-500 outline-none focus:border-primary text-neutral-800" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <div class="form-group flex justify-end">
                            <button type="submit" class="mt-10 min-w-50 btn btn-primary border border-primary bg-primary hover:bg-white hover:text-primary text-white py-3 px-6 text-sm uppercase leading[120%] font-bold whitespace-nowrap">Book Now</button>
                        </div>
                        <input type="hidden" name="trip" value="<?php echo ( isset( $_GET['trip_id'] ) ) ? get_the_title( $_GET['trip_id'] ) : ''; ?>">
                    </form>
                </div>
            </div>
        </section>
    </main>

    <?php
get_footer();