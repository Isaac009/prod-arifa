<div class="row">
    <div class="col-lg-6 col-6">
        <div class="image-box">
            <img src="{{ asset('storage/'.$member->profile_photo_url) }}"
            width="280" height="210" alt="">
        </div> <!-- /.image-box -->
    </div> <!-- /.col- -->
    <div class="col-lg-6 col-6">
        {{-- <h6 style="font-style: italic; font-size:1rem"> --}}
            @foreach($member->titles as $title)
            {{ $title }}
            @endforeach
        {{-- </h6> --}}
        {{ $member->name }}
        <hr>
        <span><strong>Email:</strong> {{ $member->email }}</span>
        <span><strong>Member since:</strong> {{ $member->joined_since }}</span>
        <hr>

        <ul class="social-icon" style="display: flex;
        justify-content: space-between;
        list-style-type: none;
        padding: 0;">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</div> <!-- /.row -->
<hr>
<div class="row">
    <div class="col-lg-12 col-12" style="margin: 10px" class="text-justify">
        <div class="text">
            <p><strong>{!! $member->bio !!}</strong></p>
        </div> <!-- /.text -->
    </div> <!-- /.col- -->
</div> <!-- /.row -->
