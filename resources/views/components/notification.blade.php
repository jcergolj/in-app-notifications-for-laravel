@if (InAppNotification::hasMessage())
    <div id="flash"
        @class([
            'absolute top-0 right-0 mr-10 mt-6 px-4 py-4 text-base border rounded-lg font-regular text-white block',
            'bg-red-500/90 border-red-500/90' => InAppNotification::isError(),
            'bg-green-500/90 border-green-500/90' => InAppNotification::isSuccess(),
            'bg-yellow-500/90 border-yellow-500/90' => InAppNotification::isWarning(),
            'bg-blue-500/90 border-blue-500/90' => InAppNotification::isInfo(),
        ])
        style="opacity:1;"
        role="alert"
    >
        <span class="font-medium">
            {{ InAppNotification::print() }}
        </span>
    </div>

    <script>
        setTimeout(() => {
            const flash = document.getElementById('flash');
            if(flash){
                flash.style.opacity = '0';
                setTimeout(() => flash.remove(), 500);
            }
        }, {{ InAppNotification::timeout() }});
    </script>
@endif
