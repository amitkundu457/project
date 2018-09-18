<template>


<!--Modal: modalCookie-->
<div class="modal fade top" id="modelId" >
    <div class="modal-dialog modal-frame modal-top modal-notify " role="document">
        <!--Content-->
        <div class="modal-content" style=" background-color:#202940">
            <!--Body-->
            <div class="modal-body">
                <div class="row d-flex justify-content-center ">

                   	<div class="modal-body ">
					<div class="row" >
						<div class="col-md-8" >
							<div class="card" >

								<div class="card-header card-header-primary">
									<p style="color: #fff;font-size: 20px;">Add new Product</p>
								</div>
								<div class="card-body">
									<div class="form-group">
										<input id="title" v-model="title"    type="text" placeholder="Enter title here" class="form-control" name="title"  >

									</div>
									<div class="form-group">
									 
									 	<textarea name="description" rows="10" v-model="description" class="form-control" id="description"  ></textarea>
									
									</div>
									<div class="row">
										<div class="col-md-4">
											<label for="">Price</label>
											<div class="input-group mb-3">
												<div class="input-group-prepend" style="border: 1px solid rgba(172,168,177,0.59);">
													<span class="input-group-text" id="basic-addon1">$</span>
												</div>
												<input type="text" v-model="price" name="price" id="price"  class="form-control" placeholder="0.00" aria-label="Username" aria-describedby="basic-addon1">
											</div>
										</div>
										<div class="col-md-4">
											<label for="">Discount</label>
											<div class="input-group mb-3">
												<div class="input-group-prepend" style="border: 1px solid rgba(172,168,177,0.59);">
													<span class="input-group-text" id="basic-addon1">$</span>
												</div>
												<input type="text" v-model="discount" name="discount" id="discount"  class="form-control" placeholder="0.00" aria-label="Username" aria-describedby="basic-addon1">
											</div>
										</div>
										<div class="col-md-4">
											<label for="">Discount Price</label>
											<div class="input-group mb-3">
												<div class="input-group-prepend" style="border: 1px solid rgba(172,168,177,0.59);">
													<span class="input-group-text" id="basic-addon1">$</span>
												</div>
												<input type="text" v-model="discount_price" name="discount_price" id="discount_price"  class="form-control" placeholder="0.00" aria-label="Username" aria-describedby="basic-addon1">
											</div>
										</div>

										<div class="col-md-6">
											<label for="">Select category</label>
											<select class=" form-control"  name="category_id"  >
												<option value="" disabled class="" style="width: 100%;background-color:#202940 ">select category</option>
											
												

											</select>
										</div>
										<div class="col-md-6">
											<label for="">Option</label>

 <input type="text" name="option" v-model="option"  class="form-control" placeholder="option"  aria-describedby="basic-addon1">

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card" style="width: 20rem;">
								<div class="card-header card-header-primary">
									<p style="color: #fff;font-size: 20px">Product status</p>
								</div>
								<div class="card-body" >
									<select name="status" v-model="status"  id="status" class="form-control" >
										<option value="" disabled class="">select product status</option>
										<option value="1">publish</option>
										<option value="0">pending</option>
									</select>

								</div>
								<button  style="width: 95%;" type="submit"  @click="addprod"   class="btn btn-success">Add Category<i class="fa fa-book ml-1"></i></button>
							</div>
							<div class="card" style="width: 20rem;">
								<div class="card-header card-header-primary">
									<p style="color: #fff;font-size: 20px">Fetured Image</p>
								</div>
								<div class="card-body">

									<div class="file-field">
										<div class="z-depth-1-half mb-4" >
											
										</div>
										<div class=" justify-content-center">
											<div class=" btn-mdb-color ">
												<input  name="thumbnail"  ref="thumbnail"  type="file">
											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="card" style="width: 20rem;">
								<div class="card-header card-header-primary">
									<p style="color: #fff;font-size: 20px">Product type</p>
								</div>
								<div class="card-body">
									<select name="product_type" v-model="product_type"  id="product_type" class="form-control">
										<option value="" disabled class="">select product type</option>
										<option value="0">fetured</option>
										<option value="1">selling</option>
									</select>
                                    
								</div>

							</div>
						</div>
					</div>
				</div>

                    
                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: modalCookie-->
</template>
<script>
export default {
  data() {
    return {
      title: "",
      description: "",
      price: "",
      discount: "",
      discount_price: "",
      //thumbnail: "",
      option: "",
      product_type: "",
      status: ""
    };
  },
  methods: {
    addprod() {
      /* let formdata = new FormData();
      formdata.append("title", this.title);
      formdata.append("description", this.description);
      formdata.append("price", this.price);
      formdata.append("discount", this.discount);
      formdata.append("discount_type", this.discount_price);
      //formdata.append("thumbnail", this.thumbnail);
      formdata.append("option", this.option);
      formdata.append("product_type", this.product_type);
      formdata.append("status", this.status);
      formdata.append("category_id", this.category_id);*/
      axios
        .post("http://shopping.test/{any}/prod", {
          title: this.title,
          description: this.description,
          price: this.price,
          discount: this.discount,
          discount_price: this.discount_price,
          option: this.option,
          product_type: this.product_type,
          status: this.status

          /* headers: {
            "Content-Type": "multipart/form-data"
          }*/
        })
        .then(data => this.$emit("proData", data))
        .catch(error => console.log(error));
    }
  }
};
</script>
<style scoped>
option {
  background-color: #202940;
}
</style>
