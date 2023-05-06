<div style="top: 0; background-color: #e3e2e1;
    width: 100%; height: 120px;
    position: sticky; z-index: 1000;">
    <div style="display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 20px;">
        {{-- GREETING --}}
        <div>
            <strong>{{ $greet }},</strong>
            <p><strong>{{ $users->name }}!</strong></p>
        </div>
        {{-- LOYALTY: .. Level --}}
        <div>
            @if ($users->loyalty === "Gold")
                <p style="color: #C6A961">{{ $users->loyalty }} Level</p>
            @else
                <p style="color: #006F42">{{ $users->loyalty }} Level</p>
            @endif
        </div>

    </div>

    <div>
        <ul class="nav-underline" style="display: flex !important; justify-content: center !important;">
            {{-- Bagian Profile--}}
            <li style="margin: 0 15px;">
                <a class="nav-link {{ ($title === "Profile") ? 'active' : '' }}" aria-current="page" href="/{{ $users->id }}">
                    <p class="fa-regular fa-user"></p> {{--Logo Profile--}}
                    Profile
                </a>
            </li>

            {{--Bagian Transaction--}}
            <li style="margin: 0 15px;">
                <a class="nav-link {{ ($title === "Transaction") ? 'active' : '' }}" href="/{{ $users->id }}/transactions">
                    <p class="fa-regular fa-sharp fa-envelope"></p>
                    Transaction
                </a>
            </li>
        </ul>
    </div>

</div>
