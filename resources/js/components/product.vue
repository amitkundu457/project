<template>


    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Product Insert Table</h4>
                            <p class="card-category"> Here is a subtitle for this table</p>
                            <a data-target="#modelId" data-toggle="modal"> <i class="material-icons pull-right">add_circle_outline</i></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class=" table">
                                    <thead class=" text-primary">

                                    <th>ID</th>
                                    <th>Category_id</th>
                                    <th>Product Image</th>
                                    <th>Product name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Option</th>
                                    <th>Product Type</th>
                                    <th>Product status</th>
                                    <th>Action</th>

                                    </thead>
                                    <tbody>
                                   <tr v-for="prods in product" :key="prods.id">
                                       <td >{{ prods.id }}</td>
                                       <td>{{ prods.category_id }}</td>
                                       
                                       <td>{{ prods.title }}</td>
                                       <td>{{ prods.description }}</td>
                                       <td>{{ prods.price }}</td>
                                       <td>{{ prods.discount }}</td>
                                       <td>{{ prods.option }}</td>
                                       <td>{{ prods.product_type }}</td>
                                       <td>{{ prods.status }}</td>
                                       <td>del</td>   
                                    </tr>
                                    </tbody>
                                     </table>

                            </div>
                            <div id="modal">
                                <modalcom @proData='addrec'></modalcom>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</template>

<script>
Vue.component("modalcom", require("./productmodal.vue"));
export default {
  data() {
    return {
      product: {}
    };
  },
  methods: {
    addrec(click) {
      this.product = click.data;
    }
  },
  created() {
    axios
      .get("http://shopping.test/{any}/prod")
      .then(response => (this.product = response.data))
      .catch(error => console.log(error));
  }
};
</script>

<style scoped>
</style>
