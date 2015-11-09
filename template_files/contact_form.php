<main class="container">
    <div class="row">
        <h1 class="hide-on-small-only">Neem contact op</h1>
        <h3 class="show-on-small hide-on-med-and-up">Neem contact op</h3>
        <p class="flow-text red-text text-accent-2">of kom gewoon een keer langs!</p>
    </div>
    <div class="row">
        <form class="col s12" method="post" action="contactengine.php">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input name="naam" id="naam" type="text" class="flow-text validate" />
                    <label for="naam">Naam</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input name="email" id="email" type="email" class="flow-text validate" />
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">message</i>
                    <textarea name="Message" id="Message" class="materialize-textarea flow-text"></textarea>
                    <label for="Message">Bericht</label>
                </div>
            </div>
            <button class="btn waves-effect waves-light red accent-2" type="submit" name="submit">Submit
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
</main>