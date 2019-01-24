
    <form class="form-inline" action="/emailsend" method="post">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control"  name="name" placeholder="name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" placeholder="email">
        </div>
        <div class="form-group">
            <label>Birth Place</label>
             <select>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
            </select>
            <input type="text" class="form-control" name="email" placeholder="email">
        </div>
        <div class="form-group">
            <label>Birthday</label>
            <input type="date" class="form-control" name="email" placeholder="email">
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="text" pattern="^\([0-9]{3}\)[0-9]{3}-[0-9]{4}$" class="form-control" name="email" placeholder="email">
        </div>

        <div class="form-group">
            <label>Company</label>
            <input type="text" class="form-control" name="email" placeholder="email">
        </div>

        <div class="form-group">
            <label>Your Menssage</label>
            <input type="text" class="form-control" name="email" placeholder="email">
        </div>

        <button type="submit" class="btn btn-primary">submit</button>
        
    </form>
