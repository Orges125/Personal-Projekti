<form role="search" method="get" class="hotel-search-form" action="<?php echo home_url('/'); ?>">

    <input type="text" name="s" placeholder="Search rooms..." required>

    <input type="date" name="checkin">

    <input type="date" name="checkout">

    <select name="guests">
        <option value="">Guests</option>
        <option value="1">1 Guest</option>
        <option value="2">2 Guests</option>
        <option value="3">3 Guests</option>
        <option value="4">4 Guests</option>
    </select>

    <button type="submit">Search</button>

</form>