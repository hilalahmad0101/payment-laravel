<div>

    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap);


        a {
            text-decoration: none;
        }

        .food-card {
            background: #fff;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 30px;
            -webkit-box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
            -webkit-transition: 0.1s;
            transition: 0.1s;
        }

        .food-card:hover {
            -webkit-box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .food-card .food-card_img {
            display: block;
            position: relative;
        }

        .food-card .food-card_img img {
            width: 100%;
            height: 200px;
            -o-object-fit: contain  ;
            object-fit: contain ;
        }

        .food-card .food-card_img i {
            position: absolute;
            top: 20px;
            right: 30px;
            color: #fff;
            font-size: 25px;
            -webkit-transition: all 0.1s;
            transition: all 0.1s;
        }

        .food-card .food-card_img i:hover {
            top: 18px;
            right: 28px;
            font-size: 29px;
        }

        .food-card .food-card_content {
            padding: 15px;
        }

        .food-card .food-card_content .food-card_title-section {}

        .food-card .food-card_content .food-card_title-section .food-card_title {
            font-size: 16px;
            color: #333;
            font-weight: 500;
            display: block;
            line-height: 1.3;
            margin-bottom: 8px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .food-card .food-card_content .food-card_title-section .food-card_author {
            font-size: 15px;
            display: block;
        }

        .food-card .food-card_content .food-card_bottom-section .space-between {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .food-card .food-card_content .food-card_bottom-section .food-card_subscribers {
            margin-left: 17px;
        }

        .food-card .food-card_content .food-card_bottom-section .food-card_subscribers img,
        .food-card .food-card_content .food-card_bottom-section .food-card_subscribers .food-card_subscribers-count {
            height: 45px;
            width: 45px;
            border-radius: 45px;
            border: 3px solid #fff;
            margin-left: -17px;
            float: left;
            background: #f5f5f5;
        }

        .food-card .food-card_content .food-card_bottom-section .food-card_subscribers .food-card_subscribers-count {
            position: relative;
        }

        .food-card .food-card_content .food-card_bottom-section .food-card_subscribers .food-card_subscribers-count span {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            font-size: 13px;
        }

        .food-card .food-card_content .food-card_bottom-section .food-card_price {
            font-size: 28px;
            font-weight: 500;
            color: #F47A00;
        }

        .food-card .food-card_content .food-card_bottom-section .food-card_order-count {
            width: 130px;
        }

        .food-card .food-card_content .food-card_bottom-section .food-card_order-count input {
            background: #f5f5f5;
            border-color: #f5f5f5;
            -webkit-box-shadow: none;
            box-shadow: none;
            text-align: center;
        }

        .food-card .food-card_content .food-card_bottom-section .food-card_order-count button {
            border-color: #f5f5f5;
            border-width: 3px;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        @media (min-width: 992px) {
            .food-card--vertical {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: relative;
                height: 235px;
            }

            .food-card--vertical .food-card_img img {
                width: 200px;
                height: 100%;
                -o-object-fit: cover;
                object-fit: cover;
            }
        }


        .card1 {
            width: 650px;
            margin: 0 auto;
            transition: all 0.3s;
        }

        .card1 nav {
            width: 100%;
            color: #727272;
            text-transform: uppercase;
            padding: 20px;
            font-size: 12px;
        }

        .card1 nav svg.heart {
            height: 24px;
            width: 24px;
            float: right;
            margin-top: -3px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .card1 nav svg.heart:hover {
            fill: red;
        }

        .card1 nav svg.arrow {
            float: left;
            height: 15px;
            width: 15px;
            margin-right: 10px;
        }

        .card1 .photo {
            padding: 17px;
            width: 38%;
            text-align: center;
            float: left;
        }

        .card1 .photo img {
            max-height: 240px;
        }

        .card1 .description {
            padding: 30px;
            float: left;
            width: 55%;
        }

        .card1 .description h1 {
            color: #515151;
            font-weight: 300;
            padding-top: 15px;
            margin: 0;
            font-size: 30px;
            font-weight: 300;
        }

        .card1 .description h2 {
            color: #515151;
            margin: 0;
            text-transform: uppercase;
            font-weight: 500;
        }

        .card1 .description h4 {
            margin: 0;
            color: #727272;
            text-transform: uppercase;
            font-weight: 500;
            font-size: 12px;
        }

        .card1 .description p {
            font-size: 12px;
            line-height: 20px;
            color: #727272;
            padding: 20px 0;
            margin: 0;
        }

        .card1 .description button {
            outline: 0;
            border: 0;
            background: none;
            padding: 8px 0px;
            margin-bottom: 30px;
            color: #515151;
            text-transform: uppercase;
            width: 125px;
            font-family: inherit;
            margin-right: 5px;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .card1 .description button:hover {
            color: #aedaa6;
            cursor: pointer;
        }
    </style>

    <div class="row">
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card " style="box-shadow: 0px 1px 11px #c9c1c1;border-radius:5px">
                <div class="card-title py-2 px-3 d-flex justify-content-between align-items-center text-dark">
                    <div>
                        <h3 style="color:gray">Total Buyins</h3>
                        <p>${{ $total_b }}</p>
                    </div>
                    <div>
                        <i style="font-size: 1.5rem;color:black;" class="fa-solid fa-cart-shopping"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card " style="box-shadow: 0px 1px 11px #c9c1c1;border-radius:5px">
                <div class="card-title py-2 px-3 d-flex justify-content-between align-items-center text-dark">
                    <div>
                        <h3 style="color:gray">Total Buyout</h3>
                        <p>${{ $total_boyout }}</p>
                    </div>
                    <div>
                        <i style="font-size: 1.5rem;color:black;" class="fa-solid fa-dollar-sign"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card " style="box-shadow: 0px 1px 11px #c9c1c1;border-radius:5px">
                <div class="card-title py-2 px-3 d-flex justify-content-between align-items-center text-dark">
                    <div>
                        <h3 style="color:gray">Total Tip</h3>
                        <p>${{ $total_tip }}</p>
                    </div>
                    <div>
                        <i style="font-size: 1.5rem;color:black;" class="fa-solid fa-dollar-sign"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row card" style="margin-top: 0;">

        <div   style="position: fixed;top:10px;right:5px; width:40%">
          
            <div wire:loading wire:target="sendMail" class="alert alert-success alert-dismissible fade show" role="alert">
                Processing Mail sending...
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
       
       

        @if (session()->has('success'))
        <div style="position: fixed;top:10px;right:5px; width:40%">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        @endif
        <div class="col-md-12 p-5">
            <div class="mt-0">
                <div class="d-flex justify-content-between align-items-center responsive">
                    <p>
                        <button class="btn btn-success  btn-sm   mb-2" data-bs-toggle="modal"
                            data-bs-target="#exampleModalAddGame">Add
                            Game Plan</button>
                        <button class="btn btn-success  btn-sm   mb-2" data-bs-toggle="modal"
                            data-bs-target="#exampleModalAddUser">Add User</button>
                    </p>
                    <p class="d-flex align-items-center responsive2">
                        <a class="btn btn-info btn-sm ml-4" style=" margin: 0px 20px;
                    width: 52%;"
                            wire:click.prevent='export'>Export</a>
                        <input type="text" class="form-control mr-3 mt-2" style="margin-right: 10px" placeholder="Please search Here...."
                            wire:model='search'>
                            <input type="date" class="form-control ml-3 mt-2" 
                            wire:model='by_date'>

                    </p>
                </div>
            </div>
            {{-- <div class="mt-3 table-responsive"> --}}
            <div class="row" style="margin-top: 20px">
                @forelse ($games as $game)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="food-card ">
                            {{-- <div class="food-card_img">
                                <img src="{{ $game->image ? asset('') . '/' . $game->image : 'images/signature.png' }}"
                                    style="height: 100px; overflow: hidden;" alt="">
                            </div> --}}
                            <div class="card-body">
                                <span>Name : </span> <span>{{$game->users->name}}</span> <br>
                                <span>Buy in : </span> $<span>{{ $game->buyin }}</span> <br>
                                <span>Cashout : </span> $<span>{{ $game->cashout }}</span> <br>
                                <span>Date and Time : </span> <span>@php
                                    $date = strtotime($games ? $game->created_at : '');
                                    echo date('d/m/Y H:i a', $date);
                                @endphp</span> <br>
                                <p class="d-flex align-items-center justify-content-between mt-2">
                                    <button class="btn-icon" data-bs-toggle="modal"
                                        wire:click.prevent='showGames({{ $game->id }})'
                                        data-bs-target="#showExampleModalAddGame"><i class="fa fa-eye"></i></button>
                                    <button class="btn-icon" wire:click.prevent='edit({{ $game->id }})'
                                        data-bs-toggle="modal" data-bs-target="#updateExampleModalAddGame"><i
                                            class="fa fa-pencil"></i></button>
                                    <button class="btn-icon" wire:click.prevent='delete({{ $game->id }})'><i
                                            class="fa fa-trash"></i></button>
                                    <button class="btn-icon" wire:click.prevent='sendMail({{ $game->id }})'><i
                                            class="fa fa-envelope"></i></button>
                                    <a class="btn btn-info btn-sm"
                                        href="{{ route('checkout', ['id' => $game->id]) }}">Cashout</a>
                                </p>
                            </div>
                          
                        </div>
                    </div>
                @empty
                    <h2>Record not found</h2>
                @endforelse
            </div>

            {{-- <table class="table table-bordered zero-configuration teble-striped" style="width: 1124px">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Time Stamp</th>
                            <th>Buyin</th>
                            <th>Total Buyin</th>
                            <th>Cashout</th>
                            <th>PNL</th>
                            <th>Amount Owned</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($games as $game)
                            <tr>
                                <td>{{ $game->name }}</td>
                                <td>{{ $game->email }}</td>
                                <td>@php
                                    $s = '06/10/2011 19:00:02';
                                    $date = strtotime($games ? $game->date_time:'');
                                    echo date('d/m/Y H:i a', $date);
                                @endphp</td>
                                <td>${{ $game->buyin }}</td>
                                <td>${{ $game->total_buyin }}</td>
                                <td>${{ $game->cashout }}</td>
                                <td>${{ $game->pnl }}</td>
                                <td>${{ $game->total_amount }}</td>
                                <td class="d-flex">
                                    <button class="btn-icon" data-bs-toggle="modal"
                                        wire:click.prevent='showGames({{ $game->id }})'
                                        data-bs-target="#showExampleModalAddGame"><i class="fa fa-eye"></i></button>
                                    <button class="btn-icon" wire:click.prevent='edit({{ $game->id }})'
                                        data-bs-toggle="modal" data-bs-target="#updateExampleModalAddGame"><i
                                            class="fa fa-pencil"></i></button>
                                    <button class="btn-icon" wire:click.prevent='delete({{ $game->id }})'><i
                                            class="fa fa-trash"></i></button>
                                    <button class="btn-icon" wire:click.prevent='sendMail({{$game->id}})'><i
                                            class="fa fa-envelope"></i></button>
                                    <a class="btn btn-info btn-sm"
                                        href="{{ route('checkout', ['id' => $game->id]) }}">Cashout</a>
                                </td>
                            </tr>
                        @empty
                            <h2>Record not found</h2>
                        @endforelse

                    </tbody>
                </table> --}}
            @if (!$search  && !$by_date)
                {{  $games->links()  }}
            @endif
            {{-- </div> --}}
        </div>

    </div>

    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <div class="modal fade" wire:ignore.self id="exampleModalAddGame" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="">
                        <h5 class="modal-title justify-content-center" id="exampleModalLabel">Payment Tracker</h5>
                    </div>
                    <button class="btn" data-bs-dismiss="modal"><i class="fas fa-times-circle"></i></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-9 mx-auto">
                                    <form wire:submit.prevent='save'>
                                        @csrf
                                        <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3">Name</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <select class="form-control" wire:model='user_id'>
                                                        <option value="">{{ __('Select Users') }}</option>
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->name }}">{{ $user->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('user_id')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3">Time Stamp</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="datetime-local" wire:model.lazy='date_time'
                                                        id="timesheetinput3" class="form-control" name="date">
                                                    @error('date_time')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3">Buyin</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="number" wire:model.lazy='buyin'
                                                        id="timesheetinput3" value="$" class="form-control"
                                                        name="date">
                                                    @error('buyin')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3">Total Buyins</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="number" wire:model.lazy='total_buyin'
                                                        id="timesheetinput3" class="form-control" name="date">
                                                    @error('total_buyin')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3">Cashout</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="number" wire:model.lazy='cashout'
                                                        id="timesheetinput3" class="form-control" name="date">
                                                    @error('cashout')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3">PNL</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="text" wire:model.lazy='pnl'
                                                        id="timesheetinput3" class="form-control" name="date">
                                                    @error('pnl')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3">Amount Owned</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="number" wire:model.lazy='amount_owned'
                                                        id="timesheetinput3" class="form-control" name="date">
                                                    @error('amount_owned')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3">Initial</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="text" wire:model.lazy='initial'
                                                        id="timesheetinput3" class="form-control" name="date">
                                                    @error('inital')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3"></label>
                                            <div class="col-md-9">
                                                <div class="mt-1 d-flex justify-content-center">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Cancel</button> &nbsp;&nbsp;
                                                    <div class="mt-0">
                                                        <button type="submit" class="btn btn-primary">Save</button>
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
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    {{-- <div class="modal fade" wire:ignore.self id="updateExampleModalAddGame" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="">
                        <h5 class="modal-title justify-content-center" id="exampleModalLabel">Payment Tracker</h5>
                    </div>
                    <button class="btn" data-bs-dismiss="modal"><i class="fas fa-times-circle"></i></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-9 mx-auto">
                                    <form wire:submit.prevent='update'>
                                        @csrf

                                        <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3">Time Stamp</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="datetime-local" wire:model.lazy='edit_date_time'
                                                        id="timesheetinput3" class="form-control" name="date">
                                                    @error('edit_date_time')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3">Buyin</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="number" wire:model.lazy='edit_buyin'
                                                        id="timesheetinput3" class="form-control" name="date">
                                                    @error('edit_buyin')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3">Total Buyins</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="number" wire:model.lazy='edit_total_buyin'
                                                        id="timesheetinput3" class="form-control" name="date">
                                                    @error('edit_total_buyin')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3">Cashout</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="number" wire:model.lazy='edit_cashout'
                                                        id="timesheetinput3" class="form-control" name="date">
                                                    @error('edit_cashout')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3">PNL</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="text" wire:model.lazy='edit_pnl'
                                                        id="timesheetinput3" class="form-control" name="date">
                                                    @error('edit_pnl')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3">Amount Owned</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="number" wire:model.lazy='edit_amount_owned'
                                                        id="timesheetinput3" class="form-control" name="date">
                                                    @error('edit_amount_owned')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3">Initial</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="text" wire:model.lazy='edit_initial'
                                                        id="timesheetinput3" class="form-control" name="date">
                                                    @error('edit_initial')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3"></label>
                                            <div class="col-md-9">
                                                <div class="mt-1 d-flex justify-content-center">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Cancel</button> &nbsp;&nbsp;
                                                    <div class="mt-0">
                                                        <button type="submit" class="btn btn-primary">Save</button>
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
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div> --}}

    <div class="modal fade" wire:ignore.self id="updateExampleModalAddGame" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="">
                        <h5 class="modal-title justify-content-center" id="exampleModalLabel">Payment Tracker</h5>
                    </div>
                    <button class="btn" data-bs-dismiss="modal"><i class="fas fa-times-circle"></i></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-9 mx-auto">
                                    <form wire:submit.prevent='update'>
                                        @csrf
                                        <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3">Name</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="text" readonly wire:model.lazy='edit_name'
                                                        id="timesheetinput3" class="form-control" name="date">
                                                    @error('edit_name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3">Email</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="email" readonly wire:model.lazy='edit_email'
                                                        id="timesheetinput3" class="form-control" name="date">
                                                    @error('edit_email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3">Buyin</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="text" wire:model.lazy='edit_buyin'
                                                        id="timesheetinput3" class="form-control" name="date">
                                                    @error('edit_buyin')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3">Total Buyins</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="text" wire:model.lazy='edit_total_buyin'
                                                        id="timesheetinput3" class="form-control" name="date">
                                                    @error('edit_total_buyin')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3">Cashout</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="text" wire:model.lazy='edit_cashout'
                                                        id="timesheetinput3" class="form-control" name="date">
                                                    @error('edit_cashout')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3">Win Loss</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="text" wire:model.lazy='edit_win_loss'
                                                        id="timesheetinput3" class="form-control" name="date">
                                                    @error('edit_pnl')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3">Total Amount</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="text" wire:model.lazy='edit_total_amount'
                                                        id="timesheetinput3" class="form-control" name="date">
                                                    @error('edit_amount_owned')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3">Initial</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="text" wire:model.lazy='edit_initial'
                                                        id="timesheetinput3" class="form-control" name="date">
                                                    @error('edit_initial')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                                for="timesheetinput3"></label>
                                            <div class="col-md-9">
                                                <div class="mt-1 d-flex justify-content-center">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Cancel</button> &nbsp;&nbsp;
                                                    <div class="mt-0">
                                                        <button type="submit" class="btn btn-primary">Save</button>
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
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" wire:ignore.self id="showExampleModalAddGame" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="">
                        <h5 class="modal-title justify-content-center" id="exampleModalLabel">Show Payment Detail</h5>
                    </div>
                    <button class="btn" data-bs-dismiss="modal"><i class="fas fa-times-circle"></i></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="card1">
                                    <div class="photo">
                                        <img src="{{ asset('') }}/{{ $show_image }}" style="width:100%;">
                                    </div>
                                    <div class="description">
                                        <h5>
                                            <span>Name : {{ $show_name }} </span>
                                        </h5>
                                        <h5>
                                            <span>Email : {{ $show_email }}</span>
                                        </h5>
                                        <h5>
                                            <span>Date and Time :
                                                @php
                                                    $date = strtotime($show_date_time);
                                                    echo date('d/m/Y H:i', $date);
                                                @endphp
                                            </span>
                                        </h5>
                                        <h5>
                                            <span>Buyin: $ {{ $show_buyin }}</span>
                                        </h5>
                                        <h5>
                                            <span>Total Buyin: $ {{ $show_total_buyin }}</span>
                                        </h5>
                                        <h5>
                                            <span>Cashout: $ {{ $show_cashout }}</span>
                                        </h5>
                                        <h5>
                                            <span>Tip Amount: $ {{ $show_amount_owned }}</span>
                                        </h5>
                                        <h5>
                                            <span>Total Amount: $ {{ $show_total_amount }}</span>
                                        </h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalDel" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="">
                        <h4 class="modal-title justify-content-center" id="exampleModalLabel">Do You Really Want to
                            Delete?</h4>
                    </div>
                    <button class="btn" data-bs-dismiss="modal"><i class="fas fa-times-circle"></i></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form>
                                <div class="form-group row">
                                    <div class="mt-1 d-flex justify-content-center">
                                        <button type="button" wire:click.prevent='deleteGame'
                                            class="btn btn-primary">Yes</button>&nbsp;&nbsp;
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">No</button>&nbsp;&nbsp;
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" wire:ignore.self id="exampleModalAddUser" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="">
                        <h4 class="modal-title justify-content-center" id="exampleModalLabel">Add User</h4>
                    </div>
                    <button class="btn" data-bs-dismiss="modal"><i class="fas fa-times-circle"></i></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form wire:submit.prevent='saveUser'>
                                @csrf
                                <div class="form-group row">
                                    <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                        for="timesheetinput3">Name</label>
                                    <div class="col-md-9">
                                        <div class="position-relative">
                                            <input type="text" wire:model.lazy='name' id="timesheetinput3"
                                                class="form-control" name="date">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                        for="timesheetinput3">Email</label>
                                    <div class="col-md-9">
                                        <div class="position-relative">
                                            <input type="email" wire:model.lazy='email' id="timesheetinput3"
                                                class="form-control" name="date">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label style="margin-top: 5px!important;" class="col-md-3 label-control"
                                        for="timesheetinput3"></label>
                                    <div class="col-md-9">
                                        <div class="mt-1 d-flex justify-content-center">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Cancel</button> &nbsp;&nbsp;
                                            <div class="mt-0">
                                                <button type="submit" class="btn btn-primary">Save</button>
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
