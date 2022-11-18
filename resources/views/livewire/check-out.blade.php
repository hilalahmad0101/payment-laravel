<div>

    <div class="row mt-5 card">
        @if (session()->has('success'))
       <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
       @endif
        <div class="col-md-12 p-5">
            <div class="mt-2">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item " role="presentation">
                        <button class="nav-link {{ !$next ? 'active' : '' }}" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">Initial</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $next ? 'active' : '' }}" " id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Cashout</button>
                    </li>
                </ul>
            </div>
            <div class="mt-2">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade {{ $next == true ? 'show active' : '' }}"  id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-7 mx-auto">
                                        <form>
                                            {{-- <div class="form-group row">
                                                <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                    for="timesheetinput3">Cashout</label>
                                                <div class="col-md-9">
                                                    <div class="position-relative">
                                                        <input type="text" id="timesheetinput3" class="form-control"
                                                            name="date">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-9">
                                                    <div class="position-relative d-flex justify-content-center">
                                                        <button type="button" class="btn btn-success"><i
                                                                class="fa fa-plus" style="font-size: 12px;"
                                                                aria-hidden="true"></i> Addon</button>

                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="form-group row">
                                                <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                    for="timesheetinput3">Win/Loss</label>
                                                <div class="col-md-9">
                                                    <div class="position-relative">
                                                        <input type="number" wire:model.lazy='win_loss' id="timesheetinput3" class="form-control"
                                                            name="date">
                                                            @error('win_loss')
                                                                <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                    for="timesheetinput3">Tip Amount</label>
                                                <div class="col-md-9">
                                                    <div class="position-relative">
                                                        <input type="number"  wire:model.lazy='tip_amount' id="timesheetinput3" class="form-control"
                                                            name="date">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-9">
                                                    <div class="position-relative d-flex justify-content-center cutombtn">
                                                        <button type="button" wire:click.prevent='increseByTen' class="btn btn-success">10%</button>
                                                        &nbsp; &nbsp;
                                                        <button type="button" wire:click.prevent='increseByfifteen' class="btn btn-info">15%</button>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-9">
                                                    <div class="position-relative d-flex align-items-center justify-content-center cutombtn">
                                                      <input type="text"  placeholder="Enter Amount in Doller" wire:keyup='changeData' wire:model='cut_amount' class="form-control">
                                                        {{-- &nbsp; &nbsp; --}}
                                                        {{-- <button type="button" wire:click.prevent='cutAmountText' class="btn btn-info">{{$cut_amount}}$</button> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                    for="timesheetinput3">Amount Owned</label>
                                                <div class="col-md-9">
                                                    <div class="position-relative">
                                                        <input type="text" wire:model.lazy='total_amount' readonly  id="timesheetinput3" class="form-control"
                                                            name="date">
                                                    </div>
                                                </div>  
                                            </div>
                                            <img src="{{ url('/').'/'.$image}}" width="300" alt="">

                                            <div class="form-group d-flex justify-content-between align-items-center cutombtn1">
                                                    <div class="mt-1 d-flex justify-content-center cutombtn">
                                                        <button type="button" wire:click.prevent='prevTab' class="btn btn-danger"
                                                            data-bs-dismiss="modal">Cancel</button> &nbsp;&nbsp;
                                                        <div class="mt-0">
                                                            <button type="button" {{$image == "" ? 'disabled':''}}  wire:click.prevent='save'
                                                            class="btn btn-primary ">Save</button>
                                                           
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="{{ route('signature', ['id' => $edit_id]) }}" class="btn btn-primary mt-1">Signature</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show {{ !$next ? 'active' : '' }}" id="pills-home" role="tabpanel"
                    aria-labelledby="pills-home-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <form>
                                    <div class="col-md-7 mx-auto">
                                            {{-- <div class="form-group row">
                                                <label style="margin-top: 5px!important;"
                                                    class="col-md-3 label-control" for="timesheetinput3">Time
                                                    Stamp</label>
                                                <div class="col-md-9">
                                                    <div class="position-relative">
                                                        <input type="datetime-local" id="timesheetinput3"
                                                            class="form-control" wire:model.lazy='date_time' name="date">

                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="form-group row">
                                                <label style="margin-top: 5px!important;"
                                                    class="col-md-3 label-control"  for="timesheetinput3">Buyin</label>
                                                <div class="col-md-9">
                                                    <div class="position-relative">
                                                        <input type="text" wire:model.lazy='buyin' id="timesheetinput3"
                                                            class="form-control" name="date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label style="margin-top: 5px!important;"
                                                    class="col-md-3 label-control" for="timesheetinput3">Total
                                                    Buyins</label>
                                                <div class="col-md-9">
                                                    <div class="position-relative">
                                                        <input type="text" wire:model.lazy='total_buyins' id="timesheetinput3"
                                                            class="form-control" name="date">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-9">
                                                    <div class="mt-1 d-flex justify-content-center cutombtn">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Cancel</button> &nbsp;&nbsp;
                                                        <div class="mt-0">
                                                            <button wire:click.prevent='nextTab'
                                                                class="btn btn-primary">Next</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

  
</div>
