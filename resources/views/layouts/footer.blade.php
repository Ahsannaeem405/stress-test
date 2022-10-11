<footer>
    <div class="container">

    </div>
</footer>
</div>
</div>
<!-- Optional JavaScript; choose one of the two! -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/lightslider.js')}}"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/popper.min.js"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.js"></script>
{{-- toastr js --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script>
    // toastr.options.timeOut = 10000;
    toastr.options = {
          "closeButton": true,
          "progressBar": true
            }
     @if(Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
        @elseif(Session::has('error'))
            toastr.error('{{ Session::get('error') }}');
        @endif

        // @if($errors->any())
        //     @foreach ($errors->all() as $error)
        //         toastr.error('{{$error}}');
        //     @endforeach
        // @endif
</script>
@stack('stress-chart-script')

<script>
// Pagination
    var items = $(".list-wrapper .list-item");
    var numItems = items.length;
    var perPage = 5;
    items.slice(perPage).hide();

    $('#pagination-container').pagination({
    items: numItems,
    itemsOnPage: perPage,
    prevText: "Previous",
    nextText: "Next",
    onPageClick: function (pageNumber) {
        var showFrom = perPage * (pageNumber - 1);
        var showTo = showFrom + perPage;
        items.hide().slice(showFrom, showTo).show();
    }
    });


// Pie Chart
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
type: 'pie',
data: {
    labels: ["Konstant ", "Hyppigt", "Nogle gange", "Sjældent", "Aldrig"],
    datasets: [{
        backgroundColor: [ "#2ecc71", "#3498db", "#ccc", "#000", "#ddd", ],
        data: [12, 19, 10, 34, 24]
    }]
}
});

</script>
</body>
</html>
