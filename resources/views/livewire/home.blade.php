<main class="page lanidng-page">
    <div class="d-flex justify-content-center my-5">
        <div class="card align-self-center w-75">
            <div class="card-header bg-dark text-light">
                <h4>Calculate Size</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group row">
                        <label for="height" class="col-4 col-form-label">Height (cm)</label>
                        <div class="col-8">
                            <input type="text" id="height" name="height" required="required" class="form-control"
                                wire:model="height" placeholder="Input your height..." wire:model="height">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="weight" class="col-4 col-form-label">Weight (kg)</label>
                        <div class="col-8">
                            <input type="text" id="weight" name="weight" required="required" class="form-control"
                                wire:model="weight" placeholder="Input your weight..." wire:model="weight">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gender" class="col-4 col-form-label">Gender</label>
                        <div class="col-8">
                            <select id="gender" name="gender" required="required" class="custom-select"
                                wire:model="gender">
                                <option selected>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group row my-3">
                            <div class="col-12">
                                <button name="submit" type="submit" class="btn btn-primary btn-block"
                                    wire:click="calcSize">
                                    Get
                                    Your
                                    Size
                                </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center my-5">
        <div class="card align-self-center w-75">
            <div class="card-body">
                <div class="form-group row mb-3">
                    <h1>Your size:&nbsp; &nbsp; {{ $size }}</h1>
                </div>
            </div>
        </div>
    </div>
</main>
