<span
    class="inline-flex items-center rounded-full px-3 py-0.5 text-sm font-medium  {{ $status ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
            <svg class="-ml-1 mr-1.5 h-2 w-2 {{ $status ? 'text-green-400':'text-red-400'}}"
                 fill="currentColor" viewBox="0 0 8 8">
                <circle cx="4" cy="4" r="3"/>
            </svg>
                {{ $status ? 'Active':'Inactive'}}
</span>
