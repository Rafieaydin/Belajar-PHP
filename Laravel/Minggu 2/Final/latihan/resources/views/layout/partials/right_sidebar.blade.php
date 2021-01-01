<div class="col-md-4  mt-5 pt-4 pr-0">


<div class="card" style="background: #29b6f6;  position: -webkit-sticky; position: sticky; top: 60px;">
    <div class="card-header">
    <h3 class="card-title">Who to follow</h3>
    </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
        <ul class="products-list product-list-in-card pl-3 pr-2">
            @foreach ($user as $users)
            <li class="item" style="background: #29b6f6;">
            <div class="product-img">
                <img class="img-circle img-size-50" src="{{$users->profile->getAvatar()}}" alt="User Image">
            </div>
            <div class="product-info">
                <a href="#" class="product-title text-dark">{{$users->profile->nama_lengkap}}</a>
                {{-- // jika folow id = user_id jalankan yang following --}}
                <?php $if_null = App\Models\Follower::where('follow_id','=',$users->id)->first() ?>
                @if (is_null($if_null))
                    <a class="btn btn-light btn-sm float-right mt-2 mr-3 py-2" href="/following/{{$users->id}}" style="border-radius:50px">Follow</a></span>
                @else
                    <a class="btn btn-light btn-sm float-right mt-2 mr-3 py-2" href="/unfollow/{{$users->id}}" style="border-radius:50px">Following</a></span>
                @endif


                <p>@ {{$users->name}}</p>
            </div>
            </li>
            @endforeach


        </ul>
        </div>
    </div>

  <div class="description mb-3" style="position: -webkit-sticky; position: sticky; top: 565px;">
    <p class="text-dark">Copyright &copy; 2020 Twitter All rights reserved.</p>
  </div>
</div>
