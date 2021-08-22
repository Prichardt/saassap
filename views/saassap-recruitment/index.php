<section class="  bg-white saassap">
    <div class=" container pb-5 pt-2 ">
    <div class=" text-center">
                        <blockquote class="blockquote text-center">
                            <p class="mb-0 h1">Application for Employment </p>
                            <br />
                            <!-- <footer class="blockquote-footer h2">Personal Information</footer>
                            <br /> -->
                        </blockquote>
                    </div>
        <form class="quote_form" action="public/mail/mover.php" method="POST">
            <div>
                <!-- STEP ONE OF REQUEST QUOTE FORM -->
                <div>
                    <!-- PERSONAL DETAILS-->
                    <div class=" text-center">
                        <blockquote class="blockquote text-center">
                            <!-- <p class="mb-0 h1">Application for Employment </p> -->
                            <br />
                            <footer class="blockquote-footer h2">Personal Information</footer>
                            <br />
                        </blockquote>
                    </div>
                    <div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" required name="title" id="title" placeholder="Title">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" required name="fname" id="fname" placeholder="First name">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" required name="lname" id="lname" placeholder="Last name">
                            </div>
                        </div>
                        <div class="row">

                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" required name="phone" id="phone" placeholder="Cellphone Number">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="tel_phone" name="tel_phone" placeholder="Telephone Number">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email address">
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="citizenship" required name="citizenship" placeholder="Citizenship">
                            </div>
                            <div class="form-group col-md-4">
                                <select id="criminal_record" required name="criminal_record" class="form-control" aria-placeholder="Have you ever been convicted of a criminal offense?">
                                    <option value="" selected select disabled>Have you ever been convicted of a criminal
                                        offense? </option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <select id="drug_test" required name="drug_test" class="form-control" aria-placeholder="If Selected for Employment Are You Willing to Submit to a Pre-Employment Drug Screening Test?">
                                    <option value="" selected select disabled>If Selected for Employment Are You Willing
                                        to Submit to a Pre-Employment Drug Screening Test? </option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <!-- CODE TO MAKE THE TWO ADDRESSES IN TO TWO COLUMNS -->
            <section>
                <div class=" ">
                    <div class="row">

                        <!-- Residential Address  -->
                        <div class="col-lg-6">
                            <section>
                                <div class=" text-center">
                                    <blockquote class="blockquote text-center">
                                        <footer class="blockquote-footer h2">Residential Address</footer>
                                    </blockquote>
                                </div>
                                <br />

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="address1" required name="address1" placeholder="Number, Unit and/or Floor, Apartment">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="street-ad1" required name="street-ad1" placeholder="Street Name">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="city-ad1" required name="city-ad1" placeholder="City">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="surbub-ad1" required name="surbub-ad1" placeholder="Suburb">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-8">
                                        <select id="province-ad1" required name="province-ad1" class="form-control" aria-placeholder="select province">
                                            <option value="" selected select disabled>Choose Province</option>
                                            <option value="Western Cape">Western Cape</option>
                                            <option value="Eastern Cape">Eastern Cape</option>
                                            <option value="Mpumalanga">Mpumalanga</option>
                                            <option value="Gauteng">Gauteng</option>
                                            <option value="Northen Cape">Northen Cape</option>
                                            <option value="Limpopo">Limpopo</option>
                                            <option value="North West">North West</option>
                                            <option value="Kwazulu-Natal">Kwazulu-Natal</option>
                                            <option value="Free State">Free State</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-control" id="postal_code1" required name="postal_code1" placeholder="Postal Code">
                                    </div>
                                </div>
                            </section>
                        </div>

                        <!-- Postal Address  -->
                        <div class="col-lg-6">
                            <div class="text-center">
                                <blockquote class="blockquote text-center">
                                    <footer class="blockquote-footer h2">Postal Address</footer>
                                </blockquote>
                            </div>
                            <br />

                            <section>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="address2" required name="address2" placeholder="Number, Unit and/or Floor, Apartment">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="street-ad2" required name="street-ad2" placeholder="Street Name">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="city-ad2" required name="city-ad2" placeholder="City">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="surbub-ad2" required name="surbub-ad2" placeholder="Suburb">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-8">
                                        <select id="province-ad2" required name="province-ad2" class="form-control" aria-placeholder="select province">
                                            <option value="" selected select disabled>Choose Province</option>
                                            <option value="Western Cape">Western Cape</option>
                                            <option value="Eastern Cape">Eastern Cape</option>
                                            <option value="Mpumalanga">Mpumalanga</option>
                                            <option value="Gauteng">Gauteng</option>
                                            <option value="Northen Cape">Northen Cape</option>
                                            <option value="Limpopo">Limpopo</option>
                                            <option value="North West">North West</option>
                                            <option value="Kwazulu-Natal">Kwazulu-Natal</option>
                                            <option value="Free State">Free State</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-control" id="postal_code2" required name="postal_code2" placeholder="Postal Code">
                                    </div>
                                </div>
                            </section>
                            <br />
                            <br />
                        </div>

                        <!-- POSITION SPECIFICATIONS -->

                        <div class="col-lg-12">
                            <section>
                                <br />
                                <div class=" text-center">
                                    <blockquote class="blockquote text-center">
                                        <footer class="blockquote-footer h2">Position & Availability</footer>
                                    </blockquote>
                                </div>

                                <div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <select id="drug_test" required name="drug_test" class="form-control" aria-placeholder="If Selected for Employment Are You Willing to Submit to a Pre-Employment Drug Screening Test?">
                                                <option value="" selected select disabled>What is the position You Are Applying For? </option>
                                                <option value="Chief Administrative Officer (CAO)">1. Chief Administrative Officer (CAO)</option>
                                                <!-- add more positions as they are advertised here -->
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <span class=" d-inline-flex ">Date available to commence duties: </span>
                                            <span class=" d-inline-flex">
                                                <input type="date" class="form-control" id="date-available" required name="date-available" placeholder="Date available to commence duties:">
                                            </span>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <select id="notice-period" required name="notice-period" class="form-control" aria-placeholder="What is your current notice period with your current employer">
                                                <option value="" selected select disabled>What is your current notice period with your current employer?</option>
                                                <option value="Immediate">Immediate</option>
                                                <option value="1 to 2 weeks">1 to 2 weeks</option>
                                                <option value="1 month">1 month</option>
                                                <option value="2 months">2 months</option>
                                                <option value="3 months">3 months</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <br />
                            <br />
                        </div>

                        <!-- Educational Qualifications -->
                        <div class="col-lg-12">
                            <section>
                                <br />
                                <div class=" text-center">
                                    <blockquote class="blockquote text-center">
                                        <footer class="blockquote-footer h2">Educational Qualifications</footer>
                                    </blockquote>
                                </div>

                                <!-- COLUMN 1 EDUCATIONAL QUALIFICATIONS -->
                                <input type="hidden" name="qualificationsField" id="qualificationsField" value="1">   
                                <div id="educational-fields">
                                <div class="row">                 
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required name="qualifications[1][institution]" id="institution-1" placeholder="Tertiary Institution / School:">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required name="qualifications[1][institution-location]" id="institution-location-1" placeholder="Location">
                                    </div>
                                  
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required name="qualifications[1][qualification]" id="qualification-1" placeholder="Qualification">
                                    </div>
                                    
                                    <div class="form-group col-md-3">
                                        <input type="number" class="form-control" required name="qualifications[1][year-completed]" id="year-completed" placeholder="Year Completed">
                                    </div>
                                     
                                </div>
                                
                                </div>  
                              
                                <div class="row">
                                    <div class="form-group text-center">
                                    <div class="btn-mine btn-mineprimary">
                                    <input type="button" value="Add More Field" id="add-fieldsQ">
                                    <input type="button" value="Remove Field" id="remove-fieldsQ">
                                    </div>
                                    </div>
                                </div>
                                <!-- COLUMN 2 EDUCATIONAL QUALIFICATIONS -->
                                <!-- <div class="row">
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required name="institution" id="institution" placeholder="2. Tertiary Institution / School:">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required name="institution-location" id="institution-location" placeholder="Location">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required name="qualification" id="qualification" placeholder="Qualification">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="number" class="form-control" required name="year-completed" id="year-completed" placeholder="Year Completed">
                                    </div>
                                </div> -->
                                <!-- COLUMN 3 EDUCATIONAL QUALIFICATIONS -->
                                <!-- <div class="row">
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required name="institution" id="institution" placeholder="3. Tertiary Institution / School:">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required name="institution-location" id="institution-location" placeholder="Location">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required name="qualification" id="qualification" placeholder="Qualification">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="number" class="form-control" required name="year-completed" id="year-completed" placeholder="Year Completed">
                                    </div>
                                </div> -->
                                <!-- COLUMN 4  EDUCATIONAL QUALIFICATIONS -->
                                <!-- <div class="row">
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required name="institution" id="institution" placeholder="4. Tertiary Institution / School:">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required name="institution-location" id="institution-location" placeholder="Location">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required name="qualification" id="qualification" placeholder="Qualification">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="number" class="form-control" required name="year-completed" id="year-completed" placeholder="Year Completed">
                                    </div>
                                </div> -->


                            </section>
                            <br />
                            <br />
                        </div>

                        <!-- Still to add Code for adding more fields -->


                        <!-- Code for previous experience -->
                        <div class="col-lg-12">
                            <section>
                                <div class=" text-center">
                                    <blockquote class="blockquote text-center">
                                        <footer class="blockquote-footer h2">
                                            Employment History (Please commence with latest employment details)
                                        </footer>
                                    </blockquote>
                                </div>
                                <br />
                                <!-- COLUMN 1 EXPERIENCE -->
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <span class=" d-inline-flex">1. Recent/Current Employer: </span>
                                        <input type="text" class="form-control" required name="employer" id="employer" placeholder="type here">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <span class=" d-inline-flex">Position held: </span>
                                        <input type="text" class="form-control" required name="p.position" id="p.position" placeholder="type here">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <span class=" d-inline-flex"> Appointment Date: </span>
                                        <span class=" d-inline-flex">
                                            <input type="date" class="form-control" id="appointment-date" required name="appointment-date" placeholder="Appointment Date:">
                                        </span>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <span class=" d-inline-flex">Termination Date: </span>
                                        <span class=" d-inline-flex">
                                            <input type="date" class="form-control" id="termination-date" required name="termination-date" placeholder="Termination Date:">
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <input type="text" class="form-control" required name="duties" id="duties" placeholder="Duties & Responsibilities">
                                </div>

                                <!-- COLUMN 2 EXPERIENCE -->
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <span class=" d-inline-flex">2. Employer: </span>
                                        <input type="text" class="form-control" required name="employer1" id="employer1" placeholder="type here">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <span class=" d-inline-flex">Position held: </span>
                                        <input type="text" class="form-control" required name="p.position1" id="p.position1" placeholder="type here">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <span class=" d-inline-flex"> Appointment Date: </span>
                                        <span class=" d-inline-flex">
                                            <input type="date" class="form-control" id="appointment-date1" required name="appointment-date1" placeholder="Appointment Date:">
                                        </span>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <span class=" d-inline-flex">Termination Date: </span>
                                        <span class=" d-inline-flex">
                                            <input type="date" class="form-control" id="termination-date1" required name="termination-date1" placeholder="Termination Date:">
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <input type="text" class="form-control" required name="duties1" id="duties1" placeholder="Duties & Responsibilities">
                                </div>


                                <!-- COLUMN 3 EXPERIENCE -->
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <span class=" d-inline-flex">3. Employer: </span>
                                        <input type="text" class="form-control" required name="employer2" id="employer2" placeholder="type here">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <span class=" d-inline-flex">Position held: </span>
                                        <input type="text" class="form-control" required name="p.position2" id="p.position2" placeholder="type here">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <span class=" d-inline-flex"> Appointment Date: </span>
                                        <span class=" d-inline-flex">
                                            <input type="date" class="form-control" id="appointment-date2" required name="appointment-date2" placeholder="Appointment Date:">
                                        </span>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <span class=" d-inline-flex">Termination Date: </span>
                                        <span class=" d-inline-flex">
                                            <input type="date" class="form-control" id="termination-date2" required name="termination-date2" placeholder="Termination Date:">
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <input type="text" class="form-control" required name="duties2" id="duties2" placeholder="Duties & Responsibilities">
                                </div>

                                <!-- COLUMN 4 EXPERIENCE -->
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <span class=" d-inline-flex">4. Employer: </span>
                                        <input type="text" class="form-control" required name="employer3" id="employer3" placeholder="type here">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <span class=" d-inline-flex">Position held: </span>
                                        <input type="text" class="form-control" required name="p.position3" id="p.position3" placeholder="type here">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <span class=" d-inline-flex"> Appointment Date: </span>
                                        <span class=" d-inline-flex">
                                            <input type="date" class="form-control" id="appointment-date3" required name="appointment-date3" placeholder="Appointment Date:">
                                        </span>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <span class=" d-inline-flex">Termination Date: </span>
                                        <span class=" d-inline-flex">
                                            <input type="date" class="form-control" id="termination-date3" required name="termination-date3" placeholder="Termination Date:">
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <input type="text" class="form-control" required name="duties3" id="duties3" placeholder="Duties & Responsibilities">
                                </div>
                            </section>
                            <br />
                            <br />
                        </div>

                        <!-- Professional Organisation Affiliation -->
                        <div class="col-lg-12">
                            <section>
                                <div class=" text-center">
                                    <blockquote class="blockquote text-center">
                                        <footer class="blockquote-footer h2">
                                            Professional Body Affiliation/Membership
                                        </footer>
                                    </blockquote>
                                </div>
                                <br />
                                <!-- affiliation 1 -->
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" required name="orgarnisation" id="orgarnisation" placeholder="1. Orgarnisation">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <span class=" d-inline-flex">Affiliation/Membership Date: </span>
                                        <span class=" d-inline-flex">
                                            <input type="date" class="form-control" id="affiliation-date" required name="affiliation-date" placeholder="Affiliation Date:">
                                        </span>
                                    </div>
                                </div>

                                <!-- affiliation 2 -->
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" required name="orgarnisation1" id="orgarnisation1" placeholder="2. Orgarnisation">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <span class=" d-inline-flex">Affiliation/Membership Date: </span>
                                        <span class=" d-inline-flex">
                                            <input type="date" class="form-control" id="affiliation-date1" required name="affiliation-date1" placeholder="Affiliation Date:">
                                        </span>
                                    </div>
                                    <br />
                                    <br />
                                </div>


                                <!-- affiliation 3 -->
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" required name="orgarnisation2" id="orgarnisation2" placeholder="3. Orgarnisation">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <span class=" d-inline-flex">Affiliation/Membership Date: </span>
                                        <span class=" d-inline-flex">
                                            <input type="date" class="form-control" id="affiliation-date2" required name="affiliation-date2" placeholder="Affiliation Date:">
                                        </span>
                                    </div>
                                </div>
                                <br />
                                <br />
                        </div>
                        <!-- REFFERENCES -->
                        <div class="col-lg-12">
                            <section>
                                <div class=" text-center">
                                    <blockquote class="blockquote text-center">
                                        <footer class="blockquote-footer h2">References (From the three most recent employers)</footer>
                                    </blockquote>
                                </div>
                                <br />
                                <!-- references 1-->
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required name="refname" id="refname" placeholder="Name & Surname:">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control" required name="ref-position" id="ref-position" placeholder="Position">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required name="ref-organisation" id="ref-organisation" placeholder="Organisation">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="number" class="form-control" required name="ref-phone" id="ref-phone" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control" required name="ref-email" id="email" placeholder="Email">
                                    </div>
                                </div>
                                <!-- references 2-->
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required name="refname" id="refname" placeholder="Name & Surname:">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control" required name="ref-position" id="ref-position" placeholder="Position">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required name="ref-organisation" id="ref-organisation" placeholder="Organisation">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="number" class="form-control" required name="ref-phone" id="ref-phone" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control" required name="ref-email" id="email" placeholder="Email">
                                    </div>
                                </div>

                                <!-- references 3-->
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required name="refname" id="refname" placeholder="Name & Surname:">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control" required name="ref-position" id="ref-position" placeholder="Position">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" required name="ref-organisation" id="ref-organisation" placeholder="Organisation">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="number" class="form-control" required name="ref-phone" id="ref-phone" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control" required name="ref-email" id="email" placeholder="Email">
                                    </div>
                                </div>

                            </section>
                        </div>

                        <section>
                                <br />
                                <div class="row">
                                <span class="col-md-8 d-inline-flex h5">
                              Please attach your Cover Letter; Resume; Certificates; ID & Driver’s Licence:
                                </span>
                                <div class="col-md-4">
<input type="file" name="fileToUpload" id="fileToUpload">
                                </div>
                                </div>

                            </section>
                        <br />
                        <!-- DISCLAIMER -->
                        <div class="col-lg-12">
                            <section>
                                <br />
                                <div class="row">
                                    <div class="form-check right-align">
                                        <input class="form-check-input" type="checkbox" id="disclaimer" required name="disclaimer" value="Yes">

                                        <span class=" d-inline-flex h5">I certify that my answers are true and complete to the best of my knowledge.
                                            If this application leads to employment, I understand that false or misleading information in my application or interview may result in my release
                                        </span></div>
                                </div>

                            </section>
                            <br />

                        </div>


                        <!-- SUBMIT BUTTON  -->
                        <div class="col-lg-12">
                        <section>
                        <div class="row text-center1">
                            <button type="submit" class="btn-mine btn-mineprimary" onclick="submitBtn();">Submit</button>
                        </div>
                        </section>
                        </div>
                       
                        <div class="g-recaptcha" data-sitekey="6LfRuPcUAAAAADtrlUew079UStKZ5gt71Lq3dfMN" data-callback="onSubmit" data-size="invisible">
                        </div>

        </form>
    </div>
</section>