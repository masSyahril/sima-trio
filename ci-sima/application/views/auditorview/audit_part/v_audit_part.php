<div class="wrapper wrapper-content m-t-xl wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="fa fa-info-circle"></i> AUDIT PART
                </div>
                <div class="panel-body">
                    <div class="form-group"><label class="col-sm-2 control-label">Data Part</label>
                        <div class="col-sm-7"><input type="text" class="form-control" placeholder="Cari Data Part" id="cari"></div>
                        <span class="help-block m-b-none text-danger" id="info"></span>
                        <div>
                        <!-- <input type="text" class="form-control" placeholder="Cari Data Part" id="cari"> -->
                                                
                            <a class="btn btn-success btn-m" id="docari">Scan Data</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th width="3%">No</th>
                                    <th width="5%">Aksi</th>
                                    <th>Cabang</th>
                                    <th>Lokasi</th>
                                    <th>Part Number</th>
                                    <th>KD Bin Box</th>
                                    <th>Deskripsi</th>
                                    <th>Qty</th>
                                    <th>Kondisi</th>
                                </tr>
                            </thead>
                            <tbody id="audit_part">
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Cabang</th>
                                    <th>Lokasi</th>
                                    <th>Part Number</th>
                                    <th>KD Bin Box</th>
                                    <th>Deskripsi</th>
                                    <th>Qty</th>
                                    <th>Kondisi</th>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="text-right"> <span id="pagination"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>