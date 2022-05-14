<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    @include('accountantViews.customers')
    @php
    /*
    @if (@Auth::user()->action == 'employee')
        @switch(@Auth::user()->employee->action)
            @case('accountant')
                    @include('.accountantViews.dashboard')
                @break
            @case('deskclerk')
                    @include('.deskClerkViews.dashboard')
                @break
            @case('worker')
                    @include('')
                @break
        @endswitch
    @elseif (@Auth::user()->action == 'customer')
        @include('customerViews.dashboard')
    @endif
    */
    @endphp
</div>