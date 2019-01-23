<nav id="principal">
    <ul>
        <li>
            <a href="{{ route('user.index') }}">
                <i class="fa fa-address-book"></i>
                <h3>Usuários</h3>
            </a>
        </li>
        <li>
            <a href="{{ route('instituition.index') }}">
                <i class="fa fa-building"></i>
                <h3>Instituições</h3>
            </a>
        </li>
        <li>
            <a href="{{ route('group.index') }}">
                <i class="fa fa-users"></i>
                <h3>Grupos</h3>
            </a>
        </li>
        <li>
            <a href="{{ route('moviment.application') }}">
                <i class="fas fa-piggy-bank"></i>
                <h3>Investir</h3>
            </a>
        </li>
        <li>
            <a href="{{ route('moviment.getback') }}">
                <i class="fas fa-hand-holding-usd"></i>
                <h3>Resgatar</h3>
            </a>
        </li>
        <li>
            <a href="{{ route('moviment.index') }}">
                <i class="fa fa-chart-bar"></i>
                <h3>Aplicações</h3>
            </a>
        </li>
        <li>
            <a href="{{ route('moviment.all') }}">
                <i class="fas fa-list-ul"></i>
                <h3>Extrato</h3>
            </a>
        </li>
    </ul>
</nav>