@extends('layouts/app')



@push('scripts')
<script>
  $( function() {
    
  // $('.product_details').fadeOut('fast');
    $( ".teye_search" ).autocomplete({

      source: "{{ url('search/advance')}}",
      minLength: 1,
      select: function( event, ui ) {
        //$('.lookbook_id').val(ui.item.id)
        //genarate_table(ui.item);
        window.location.href = ui.item.link;

      }
    });
  } );

$(".teye_search").on('keyup', function (e) {
    if (e.keyCode == 13) {
        window.location.href = "{{url("search")}}?q="+$(this).val();
    }
});

  </script>
@endpush

@section('content')

<main class="mens_page">
    <section class="section_1">
        <div class="container">
            <div class="row">
                <h2>Search</h2>

                <div class="col-md-6 col-md-offset-3">

<form method="get">
    


                	         <div class="input-group">
      <input type="text" class="form-control teye_search" name="q" value="{{request()->input('q')}}" placeholder="What are you looking for? eg: women's jaket or skirt">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Go!</button>
      </span>
    </div><!-- /input-group -->

</form>
                </div><!-- end col -->
       

                 
               
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0">
                 
                    <div class="row">
                       
                        <div class="col-md-12 col-sm-8 col-xs-7 product_side" style="border: none;">
                          
                            <div class="row">
                                @if(count($products)==0)
                                    <div class="alert alert-danger">red</div>
                                @endif
                                @foreach($products as $product)
                                    @include('componets.product.single_item')
                                @endforeach
                               
                            </div>
                            <div class="row">

                            {{ $products->appends(request()->input())->links() }}
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@stop