<div class="jeuDev">
    <div class="code">
        <div>
            <h2>Intéressé par le métier de développeur ?</h2>
            <p>C'est un métier plutôt dédié à des personnes ayant un oeil artistique ainsi que des capacitées de reflexion logique. Cette profession est très complète de par les différents domaines qu'elle aborde mais également le milieu dans lequel on y évolue. C'est également un métier très libre et beaucoup de personnes fonctionnent en free-lance.</p>
            <svg>
                <path d="M353,317H318V67L215,142,112,67V317H77V164c-12.665-9-28.335-21-41-30V285L0,260C0.333,195.006,0,123.667,0,66c77.82,55.935,52.336,37.668,78,56,0.333-40.329-.333-81.671,0-122,45.329,33,91.671,67,137,100C260.329,67,306.671,33,352,0h0V122c25.664-18.332,52.336-37.668,78-56h0V260c0.082,0.169.171,0.294,0,0-11.332,7.666-24.668,17.334-36,25V134l-41,30V317ZM198,160h34v31H198V160Zm0,47h34V317H198V207Z"/>
            </svg>
        </div>
    </div>
    <div class="outils">
        <h2>Quelle balise voulez-vous changer ?</h2>
        <details class="custom-select">
            <summary class="radios">
                <input type="radio" name="item" id="default" title="Selectionnez" checked>
                <input type="radio" name="item" id="h2" title="h2">
                <input type="radio" name="item" id="p" title="p">
                <input type="radio" name="item" id="svg" title="svg">
                <input type="radio" name="item" id="div" title="div">
            </summary>
            <ul class="list">
                <li>
                    <label for="div">div</label>
                </li>
                <li>
                    <label for="h2">h2</label>
                </li>
                <li>
                    <label for="p">p</label>
                </li>
                <li>
                    <label for="svg">svg</label>
                </li>
            </ul>
        </details>

        <div class="div">
            <h2>height</h2>
            <input type="range" id="heightS" min="25" max="39" value="35">
            <h2>width</h2>
            <input type="range" id="widthS" min="25" max="45" value="30">
            <h2>background-color</h2>
            <input type="color" id="bgcolorS" value="#F0F0F0">
            <h2>border</h2>
            <input type="color" id="borderColorS" value="#000000">
            <input type="range" id="borderSizeS" min="0" max="10" value="4">
            <h2>border-radius</h2>
            <input type="range" id="bRadiusS" min="0" max="40" value="10">
        </div>

        <div class="h2">
            <h2>font-size</h2>
            <input type="range" id="fontS" min="25" max="200" value="150">
            <h2>color</h2>
            <input type="color" id="colorS" value="#1DB250">
            <h2>text-align: center;</h2>
            <input type="checkbox" id="tCenterS">
            <h2>margin-top</h2>
            <input type="range" id="mTopS" min="0" max="10" value="0.83">
            <h2>margin-bottom</h2>
            <input type="range" id="mBottomS" min="0" max="10" value="0">
            <h2>opacity</h2>
            <input type="range" id="opacityS" min="0" max="100" value="100">
        </div>

        <div class="p">
            <h2>font-size</h2>
            <input type="range" id="fontS" min="25" max="200" value="100">
            <h2>color</h2>
            <input type="color" id="colorS" value="#000000">
            <h2>text-align: center;</h2>
            <input type="checkbox" id="tCenterS">
            <h2>margin: auto;</h2>
            <input type="checkbox" id="mAutoS">
            <h2>width</h2>
            <input type="range" id="widthS" min="25" max="100" value="100">
            <h2>opacity</h2>
            <input type="range" id="opacityS" min="0" max="100" value="100">
        </div>

        <div class="svg">
            <h2>transform: scale()</h2>
            <input type="range" id="scaleS" min="25" max="300" value="100">
            <h2>margin: auto;</h2>
            <input type="checkbox" id="mAutoS">
            <h2>margin-top</h2>
            <input type="range" id="mTopS" min="-100" max="100" value="0">
            <h2>opacity</h2>
            <input type="range" id="opacityS" min="0" max="100" value="100">
            <h2>fill</h2>
            <input type="color" id="fillS" value="#000000">
        </div>
    </div>
</div>