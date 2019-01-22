<form action="" method="POST">

    <div class="form-group">

        <label for="occasion" class="col-form-label text-md-right">
            <strong>What is the occasion?</strong>
        </label>

        <div class="row">
            <div class="col-sm-2">
                <input type="radio" value="Celebration" name="occasion"> Celebration
            </div>
            <div class="col-sm-2">
                <input type="radio" value="Personal" name="occasion"> Personal
            </div>
        </div>

    </div>

    <div class="form-group">

        <label for="persons" class="col-form-label text-md-right">
            <strong>How many persons do you wish your chef to cook for?</strong>
        </label>

        <div class="col-md-6">
            <input id="persons" type="text" name="persons"{{ $errors->has('persons') ? ' is-invalid' : '' }}>
        </div>

    </div>

    <div class="form-group">

        <label for="occasion" class="col-form-label text-md-right">
            <strong>Are your ingredients available?</strong>
        </label>

        <div class="row">
            <div class="col-sm-2">
                <input type="radio" value="yes" name="occasion"> Yes, they are
            </div>
            <div class="col-sm-4">
                <input type="radio" value="no" name="occasion"> No, the chef should handle that
            </div>
            <div>
                <p>
                    <strong>
                        (If you wish for the chef to handle the procurement of the ingredients,
                        this would incur extra costs)
                    </strong>
                </p>
            </div>
        </div>

    </div>

    <div class="form-group">

        <label for="meals" class="col-form-label text-md-right">
            <strong>What meals do you wish prepared?</strong>
        </label>

        <div class="col-md-6">
            <textarea name="meals" id="meals" cols="50" rows="5"{{ $errors->has('persons') ? ' is-invalid' : '' }}></textarea>
        </div>

    </div>

    <div class="form-group">

        <label for="occasion" class="col-form-label text-md-right">
            <strong>What service would you prefer?</strong>
        </label>

        <div class="row">
            <div class="col-sm-2">
                <input type="radio" value="delivery" name="occasion"> Delivery
            </div>
            <div class="col-sm-2">
                <input type="radio" value="home-service" name="occasion"> Home service
            </div>
        </div>

    </div>

</form>
