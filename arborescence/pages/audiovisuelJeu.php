<div class="audiovisuel">
    <div class="jeuAudiovisuel">
        <h1 class="nomLogi">Find Your Montage - V0.1
            <svg class="menu" viewBox="0 -53 384 384" xmlns="http://www.w3.org/2000/svg">
                <path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/>
                <path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/>
                <path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/>
            </svg>
        </h1>
        <div class="containVideo">
            <div class="preview">
                <div class="color">
                    <div class="filtre">
                        <video class="videoPrev">
                            <source src="../medias/interviews/intro_at.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <h4>Volume</h4>
                <input type="range" class="volume" value="100" min="0" max="100">
            </div>
            <div class="param">
                <h1>Paramètres</h1>
                <h5>Luminosité
                    <input type="range" class="luminosite" value="127" min="0" max="255">
                </h5>
                <h5>Bordures
                    <input type="range" class="bordure" value="0" min="0" max="10">
                    <input type="color" class="bColor" value="#EEB81D">
                </h5>
                <h1>Propriétés vidéo</h1>
                <div class="proprietes">
                    <h5>Norme de codage: MPEG-4</h5>
                    <h5>Codec: avc1</h5>
                    <h5>Définition: 854x480</h5>
                    <h5>Structure de sous-echantillonage: 4:2:0</h5>
                    <h5>Profondeur de quantification: 8bits</h5>
                    <h5>Frame rate: 59.94 FPS</h5>
                </div>
            </div>
        </div>
        <ul class="items">
            <li class="drag" id="intro">
                <img src="../medias/miniatures/intro.svg">
                <ul class="deroulement">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                </ul>
            </li>
            
            </li>
            <li class="drag" id="partie1">
                <img src="../medias/miniatures/metiers.svg">
                <ul class="deroulement">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                </ul>
            </li>
            <li class="drag" id="partie2">
                <img src="../medias/miniatures/etapes.svg">
                <ul class="deroulement">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                </ul>
            </li>
            <li class="drag" id="partie3">
                <img src="../medias/miniatures/pref.svg">
                <ul class="deroulement">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                </ul>
            </li>
            <li class="drag" id="outro">
                <img src="../medias/miniatures/outro.svg">
                <ul class="deroulement">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                </ul>
            </li>
        </ul>
        <div class="toolbar">
            <svg version="1.1" viewBox="0 0 512 512" class="pReload">
                <path d="m464.022 232h-.022a24 24 0 0 0 -23.98 24.021 184.063 184.063 0 0 1 -289.527 150.688c-83.1-58.188-103.369-173.136-45.181-256.237s173.137-103.372 256.237-45.182a184.078 184.078 0 0 1 34.012 30.71h-67.54a24 24 0 0 0 0 48h112a24 24 0 0 0 24-24v-112a24 24 0 0 0 -48 0v39.967a234.175 234.175 0 0 0 -26.94-22 231.982 231.982 0 1 0 -266.119 380.061 230.285 230.285 0 0 0 132.567 42.015 234.971 234.971 0 0 0 40.776-3.585 232.025 232.025 0 0 0 191.716-228.479 24 24 0 0 0 -23.999-23.979z"/>
            </svg>
            <svg version="1.1" viewBox="0 0 36 36" class="pButton">
                <path d="M 12,26 18.5,22 18.5,14 12,10 z M 18.5,22 25,18 25,18 18.5,14 z"></path>
            </svg>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 493.796 493.796" class="pSkip">
                <path d="M355.938,200.956L81.414,12.128c-11.28-7.776-23.012-11.88-33.056-11.88c-22.052,0-36.672,18.496-36.672,48.26v397.036c0,14.54,4.228,26.688,10.496,35.144c6.364,8.572,16.32,13.108,27.076,13.108c10.04,0,21.308-4.112,32.584-11.876l274.276-188.828c17.632-12.152,27.3-28.508,27.296-46.076C383.414,229.456,373.594,213.1,355.938,200.956z"/>
                <path d="M456.446,493.672l-0.293-0.004c-0.048,0-0.095,0.004-0.143,0.004H456.446z"/>
                <path d="M455.638,0L444.29,0.032c-14.86,0-27.724,12.112-27.724,26.992v439.368c0,14.896,12.652,27.124,27.532,27.124l12.055,0.152c14.805-0.079,25.957-12.412,25.957-27.252V26.996C482.11,12.116,470.51,0,455.638,0z"/>
            </svg>            
        </div>        
    </div>
</div>