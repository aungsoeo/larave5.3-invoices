<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            <label>Invoice No.</label>
            <input type="text" class="form-control" v-model="form.invoice">
        </div>
    </div>
</div>

<hr>

<table class="table table-bordered table-form">
    <thead>
    <tr>
        <th>Item Name</th>
        <th># of Items</th>
        <th>Price</th>
        <th>Total</th>
    </tr>
    </thead>
    <tbody>
          <tr v-for="product in form.products">
              <td class="table-name" :class="{'table-error': errors['products.' + $index + '.name']}">
                  <input type="text" class="table-control" v-model="product.name">
              </td>
              <td class="table-price" :class="{'table-error': errors['products.' + $index + '.price']}">
                  <input type="text" class="table-control"  v-model="product.price">
              </td>
              <td class="table-qty" :class="{'table-error': errors['products.' + $index + '.qty']}">
                  <input type="text" class="table-control" v-model="product.qty">
              </td>
              <td class="table-total">
                  <span class="table-text">
                    <input type="text" >               
                  </span>
              </td>
              <td class="table-remove">
                  <span @click="remove(product)" class="table-remove-btn">&times;</span>
              </td>
          </tr>
      </tbody>
      <tfoot>
          <tr>
              <td class="table-empty" colspan="2">
                  <span @click="addLine" class="table-add_line">Add Line</span>
              </td>
              <td class="table-label">Sub Total</td>
              <td class="table-amount">
                <input type="text" >

              </td>
          </tr>
          <tr>
              <td class="table-empty" colspan="2"></td>
              <td class="table-label">Tax</td>
              <td class="table-discount" :class="{'table-error': errors.discount}">
                  <input type="text" class="table-discount_input" v-model="form.discount">
              </td>
          </tr>
          <tr>
              <td class="table-empty" colspan="2"></td>
              <td class="table-label">Total</td>
              <td class="table-amount">
                <input type="text" >
              </td>
          </tr>
      </tfoot>
  </table>
