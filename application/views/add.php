<div id="container">
	<h1>Welcomfgjhfghjfe to CodeIgniter!</h1>

	<div id="body" >
        <form action="/welcome/bb">
            <input name="task">
            <input name="deadline">
            <button type="submit">Save</button>
        </form>
	</div>

    <p><?=$data?></p>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>