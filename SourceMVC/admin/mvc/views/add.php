<div class="task-name">Add Item</div>
<div class="form">
    <form action="" onsubmit="return false">
        <div class="row">
            <div class="col-lg-4">
                <div class="image-upload"></div>
                <label for="upload-photo" class="btn btn-success" id="label-upload">Add Image</label>
                <input type="file" name="photo" id="upload-photo" />
            </div>
            <div class="col-lg-8">
                <div>
                    <label for="input-category" class="form-label">Category:</label>
                    <select name="input-category" id="input-category" class="form-select">
                        <option value="1">1 - Beverages</option>
                        <option value="2">2 - Breakfast</option>
                        <option value="3">3 - Chicken</option>
                        <option value="4">4 - Burger</option>
                        <option value="5">5 - Salad</option>
                    </select>
                </div>
                <div>
                    <label for="input-name" class="form-label mt-2">Item Name: </label>
                    <input type="text" class="form-control" />
                </div>
                <div>
                    <label for="input-price" class="form-label mt-2">Price: </label>
                    <input type="number" min="0" class="form-control" />
                </div>
                <div>
                    <label for="input-description" class="form-label mt-2">Description: </label>
                    <input type="text-area" class="form-control" />
                </div>
                <div>
                    <label for="input-name" class="form-label mt-2">Calories </label>
                    <input type="number" min="0" class="form-control" />
                </div>
            </div>
        </div>
        <div class="contain-button">
            <button class="btn btn-primary button-add">Add new</button>
            <button type="reset" class="btn btn-danger ms-4">Reset</button>
        </div>
    </form>
</div>