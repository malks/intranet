
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Svelte and other libraries. It is a great starting point when
 * building robust, powerful web applications using Svelte and Laravel.
 */

require('./bootstrap');

import IntranetFeed from "./components/IntranetFeed.svelte";

customElements.define('intranet-feed', IntranetFeed);