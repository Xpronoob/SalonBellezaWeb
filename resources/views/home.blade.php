<x-public-layout>

    <!-- VISTA -->
    <div class="card card-form">
        <div class="row no-gutters">
            <div class="col-lg-4 card-body">
                <p><strong class="headings-color">Form Validation</strong></p>
                <p class="text-muted">Provide valuable, actionable feedback to your users with HTML5 form validation.
                    Indicate invalid and valid form fields with <code>.is-invalid</code> and <code>.is-valid</code>
                    classes.</p>
            </div>
            <div class="col-lg-8 card-form__body card-body">
                <form>
                    <div class="was-validated">
                        <div class="form-row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="validationSample01">First name</label>
                                <input type="text" class="form-control" id="validationSample01"
                                    placeholder="First name" value="Mark" required="">
                                <div class="invalid-feedback">Please provide a first name.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="validationSample02">Last name</label>
                                <input type="text" class="form-control" id="validationSample02"
                                    placeholder="Last name" value="Otto" required="">
                                <div class="invalid-feedback">Please provide a last name.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="validationSample03">City</label>
                                <input type="text" class="form-control" id="validationSample03" placeholder="City"
                                    required="">
                                <div class="invalid-feedback">Please provide a valid city.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="validationSample04">State</label>
                                <input type="text" class="form-control" id="validationSample04" placeholder="State"
                                    required="">
                                <div class="invalid-feedback">Please provide a valid state.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" value="" id="invalidCheck01"
                                required="" checked="">
                            <label class="custom-control-label" for="invalidCheck01">
                                Agree to terms and conditions
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- FIN VISTA -->

</x-public-layout>
