<main class="page lanidng-page">
    <div class="d-flex justify-content-center my-5">
        <div class="card align-self-center w-75">
            <div class="card-header bg-dark text-light">
                <h4>Calculate My Size</h4>
            </div> 
            <div class="card-body">
                <form>
                    <div class="form-group row">
                      <label for="berat" class="col-4 col-form-label">Berat (kg)</label> 
                      <div class="col-8">
                        <select id="berat" name="berat" required="required" class="custom-select" wire:model="berat">
                            <option value="" selected>-</option>
                          <option value="ringan">40 - 50</option>
                          <option value="sedang">60 - 70</option>
                          <option value="berat">80 - 90</option>
                          <option value="ekstrim">100 - 110</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="tinggi" class="col-4 col-form-label">tinggi (cm)</label> 
                      <div class="col-8">
                        <select id="tinggi" name="tinggi" required="required" class="custom-select" wire:model="tinggi">
                            <option value="" selected>-</option>
                          <option value="pendek">140 - 150</option>
                          <option value="sedang">160 - 170</option>
                          <option value="tinggi">180 - 190</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="tinggi" class="col-4 col-form-label">Gender</label> 
                        <div class="col-8">
                          <select id="gender" name="gender" required="required" class="custom-select" wire:model="gender">
                            <option value="" selected>-</option>
                            <option value="pria">Pria</option>
                            <option value="wanita">wanita</option>
                           
                          </select>
                        </div>
                      </div>
                    <div class="form-group row">
                      <div class="offset-4 col-8">
                        <button name="submit" type="button" class="btn btn-primary" wire:click="save">Submit</button>
                      </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center my-5">
        <div class="card align-self-center w-75">
            <div class="card-body">
                <div class="form-group row mb-3">
                    <h1>Your size:&nbsp; &nbsp; {{ $size }}</h1>
                </div>
            </div>
        </div>
    </div>
</main>
