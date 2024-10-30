<?php

function mollyTheaterPluginAddSettingsPage() {
  add_management_page( 'Molly Theater', 'Molly Theater', 'manage_options', 'molly-theater', 'mollyTheaterPluginRenderSettingsPagemt_render_plugin_settings_page' );
}
add_action( 'admin_menu', 'mollyTheaterPluginAddSettingsPage' );



function mollyTheaterPluginRenderSettingsPagemt_render_plugin_settings_page() {
  ?>
  <style>
    h2.mollySettingsH {
      margin-top: 2em;
      margin-bottom: .25em;
    }
  </style>
  <h1>Molly Theater (Video Player)</h1>
  <p>A lightweight plugin (5KB GZipped) for playing Vimeo or Youtube videos in a full screen player</p>
  <h2 class="mollySettingsH">To use:</h2>
  <p>Activate plugin and add a data attribute of either <code>data-molly-video-vimeo</code> or <code>data-molly-video-youtube</code> containing either the vimeo ID (a string of numbers, e.g. &#39;87530837&#39;) or a Youtube ID (an alpha-numeric string, e.g. &#39;AajP933wMUo&#39;).</p>
  <p>When the element with the data attribute is clicked, a full-screen video will appear. Happy viewing&#8230; &#128250;</p>
  <h2 class="mollySettingsH">Examples:</h2>
  <p>Vimeo example: <code>&lt;div data-molly-video-vimeo=&quot;87530837&quot;&gt;Click me to watch this Vimeo video&lt;/div&gt;</code></p>
  <p>Youtube example: <code>&lt;div data-molly-video-youtube=&quot;AajP933wMUo&quot;&gt;Click me to watch this Youtube video&lt;/div&gt;</code></p>
  <h2 class="mollySettingsH">Class names</h2>
  <p>The following are the class names used brief descriptions:</p>
  <ul>
    <li><code>#mollyPluginTheater.mollyPluginTheater</code>: The master container lives in the footer statically and should not be altered in CSS otherwise it will cause issues in the footer. When the Theater is open, this has a class of <code>.theaterIsOpen</code>.</li>
    <li><code>>.mollyTheaterCtn</code>: This class which controls the full screen background and is the first of the dynamically added classes. Default background color is <code>#090909</code>.</li>
    <li><code>>>.mollyTheaterSize</code>: This centers the player both vertically and horizontally and controls the max-height of player. Edit with caution.</li>
    <li><code>>>>.mollyTheater</code>: This controls the aspect ratio (default is 16:19) of the player via <code>height: 0;</code> and <code>padding-bottom: 56.25%;</code>. Has a background of <code>#000000</code>.</li>
    <li><code>>>>>iframe.mollyTheaterIframe</code>: The actual iframe of the embed. Is absoltuly positioned to fill size of <code>.mollyTheater</code>. When the Theater is opened,</li>
    <li><code>.mollyVideoCloseTheaterButton</code>: The class for the close button which defaults to the top-left. The <code>:before</code> and <code>:after</code> pseudo elements make up the X. This is nested within <code>.mollyTheaterCtn</code>.</li>
  </ul>
  <h2 class="mollySettingsH">Body tag class name</h2>
  <p>When the Theater is open, <code>&lt;body&gt;</code> has a class of <code>.theaterIsOpen</code>.</p>
  <h2 class="mollySettingsH">CSS Specificity</h2>
  <p>When writing custom CSS for the Theater, referencing the classes listed above, you can add the class <code>.custom</code> to any of the above classes so that your changes cascade properly. For example: if modifying the <code>.mollyTheater</code> class, in your CSS write it as <code>.mollyTheater.custom {&#8230;}</code>.</p>
  <h2 class="mollySettingsH">Custom Fields</h2>
  <p><a href="https://www.advancedcustomfields.com/">Advanced Custom Fields (Pro)</a> can be used very effectively to dynamically place the Vimeo and Youtube IDs.</p>

  <?php
}