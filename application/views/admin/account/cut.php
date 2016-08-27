<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label class="col-md-4 control-label">Description</label>
            <div class="col-md-8">
                <input type="text" name="Descrption" class="form-control"
                       placeholder="Enter Description"/>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="col-md-4 control-label">Category</label>
            <div id="roomset" class="col-md-8">
                <select class="form-control" name="Category">
                    <option value="">--Select Category--</option>
                    <option selected="selected" value="1">Rent</option>
                    <option value="2">Deposits</option>
                    <option value="3">Other income</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="col-md-4 control-label">Status</label>
            <div id="roomset" class="col-md-8">
                <select class="form-control" name="Status">
                    <option value="">--Select Status--</option>
                    <option value="1">paid</option>
                    <option value="2">pending</option>
                    <option value="3">unpaid</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-6 control-label">Paid</label>
            <div id="roomset" class="col-md-6">
                <select class="form-control" name="Paid">
                    <option value="">--Select Paid--</option>
                    <option value="1">Bank Transfer</option>
                    <option value="2">Cash</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
        </div>
    </div>
</div>

//=====================================
<div class="col-md-4">
    <div class="form-group">
        <label class="col-md-4 control-label">Amount Due</label>
        <div class="col-md-8">
            <input type="number" name="car[0][AmounteDue]" class="form-control"
                   placeholder="Enter Amount Due">
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label class="col-md-4 control-label">Amount Paid</label>
        <div class="col-md-8">
            <input type="number" name="car[0][AmountPaid]" class="form-control"
                   placeholder="Enter Amount Paid">
        </div>
    </div>
</div>


$Balance= $this->input->post('AmounteDue') - $this->input->post('AmountPaid');
$data_to_store = array(
'TenantID' => $this->input->post('TenantID'),
'PropertyID' => $this->input->post('PropertyID'),
'RoomID' => $this->input->post('room'),
'DueDate' => $this->input->post('DueDate'),
'AmounteDue' => $this->input->post('AmounteDue'),
'AmountPaid' => $this->input->post('AmountPaid'),
'Descrption' => $this->input->post('Descrption'),
'Category' => $this->input->post('Category'),
'Balance' => $Balance,
'Status' => $this->input->post('Status'),
'Paid' => $this->input->post('Paid'),
'UserID' => $this->input->post('UserID')
);
if($query=$this->Account_model->add_transaction($data_to_store) ){
$this->session->set_flashdata('Type', 'alert-success');
$this->session->set_flashdata('flash_message', 'Saved Successfully');
redirect('admin/management/');
}else{
if($query==0){
$this->session->set_flashdata('Type', 'alert-error');
$this->session->set_flashdata('flash_message', 'Can not save .');
redirect('admin/management/add_issues/');
}

}



if($query=$this->Account_model->add_transaction($data_to_store) ){
$this->session->set_flashdata('Type', 'alert-success');
$this->session->set_flashdata('flash_message', 'Saved Successfully');
redirect('admin/management/');
}else {
if ($query == 0) {
$this->session->set_flashdata('Type', 'alert-error');
$this->session->set_flashdata('flash_message', 'Can not save .');
redirect('admin/management/add_issues/');
}
}