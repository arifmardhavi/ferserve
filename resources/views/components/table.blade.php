@props(['thead'])

<div class="overflow-x-auto">
    <table {{ $attributes->merge(['class' => 'w-full border border-slate-100 [&_th]:p-2 [&_td]:p-2 table-auto']) }}>
        <!-- Order your soul. Reduce your wants. - Augustine -->
        <thead {{ $thead->attributes }}>
            {{ $thead }}
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
        @if (isset($tfoot))
            <tfoot>
                {{ $tfoot }}
            </tfoot>
        @endif
    </table>
</div>