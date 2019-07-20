@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">About</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    This page was founded in Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis placerat leo laoreet efficitur. Vestibulum sed massa elit. In quis nisl sit amet augue laoreet lacinia a vitae ligula. Nulla a lectus arcu. Integer tempus suscipit pharetra. Curabitur ac lobortis nisl. Sed lobortis pharetra ipsum, eu laoreet justo sodales vel. Vestibulum ut velit sit amet purus tristique elementum viverra a nibh. Mauris finibus tempus blandit. Nam porttitor vulputate massa ut condimentum. Nulla mi justo, maximus et cursus non, vehicula eget sapien.

                        Donec rhoncus tempus libero, eget vulputate dui faucibus eu. Mauris commodo tempus magna id dictum. Integer et lectus neque. Vestibulum ultricies felis nunc, aliquam vestibulum tellus viverra vel. Cras aliquam nibh id gravida dapibus. Praesent libero sapien, venenatis non dui non, aliquet placerat velit. Cras scelerisque sapien id nibh efficitur, ut blandit neque posuere. Quisque ac nibh suscipit turpis congue pretium a ut ligula. Maecenas vestibulum eget urna vitae tempor. Suspendisse molestie sit amet tellus nec porta. Nulla a arcu dictum, pharetra sem sed, porttitor ex. Sed nisi sem, facilisis tempor enim sit amet, dignissim lobortis diam. Ut a mi et elit scelerisque imperdiet. Pellentesque turpis ex, volutpat et tortor non, accumsan dapibus odio. Duis et tortor ligula. Mauris egestas tellus augue, vel blandit mauris egestas sed.

                        Donec eget neque vitae ante pulvinar maximus mollis auctor risus. Proin tincidunt consectetur sagittis. Phasellus volutpat massa sed risus ultrices, in pharetra nisl consectetur. Nunc est nunc, tincidunt quis convallis gravida, fringilla eget purus. Fusce rutrum placerat eros vitae gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed non tellus at felis ultrices commodo id a eros. Nulla mattis nibh ut vulputate luctus. Etiam vitae nunc eget eros laoreet pulvinar. Proin eu magna dignissim, sagittis tortor tempus, bibendum nibh. Curabitur laoreet eros ante, ut posuere mauris dictum pharetra.

                        Nam a tortor id diam imperdiet condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed et blandit nisl. Aliquam vitae velit risus. Vestibulum tincidunt, velit vel sodales condimentum, justo ex finibus diam, non volutpat ex lectus vitae ante. Etiam tristique ligula nibh, et suscipit tortor congue ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque dignissim euismod. Integer condimentum lectus vitae elit feugiat, consequat egestas urna egestas. Quisque orci ex, blandit ut maximus sit amet, tempus at ante. In risus odio, pulvinar sed elementum id, pellentesque vel mauris. Aenean ut elementum risus.

                        Nunc at diam est. Cras vel magna eget risus vestibulum posuere et at nisi. Morbi interdum ac justo imperdiet blandit. Ut varius at ex ut sollicitudin. Phasellus elit nisl, accumsan sed tempus quis, dapibus nec diam. Donec egestas in orci ut condimentum. Etiam quis neque purus. Suspendisse a venenatis nunc, sed pellentesque quam. Suspendisse id pretium libero. Phasellus elementum felis eget blandit eleifend. Aliquam id felis leo. In semper commodo nisi in faucibus. Suspendisse maximus nunc sit amet efficitur semper.

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
