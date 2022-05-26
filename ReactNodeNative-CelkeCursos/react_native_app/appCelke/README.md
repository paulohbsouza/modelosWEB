COMO RODAR O PROJETO BAIXADO
Instalar todas as depedencias indicada pelo packge.
json
### npm install

Rodar o projeto usando emulador ou dispositivo físico
### npx react-native run-android

Não fechar a janela do Metro Bundler, caso tenha fehcado,
para rodar somente executar o camando
### npx react-native start


SEQUENCIA PARA CRIAR O PROJETO
Criar o projeto com React Native
### npx react-native init NOME_DO_PROJETO

Rodar o projeto usando emulador ou dispositivo físico
### npx react-native run-android

Para navegar entre as páginas
### npm install @react-navigation/native
### npm install react-native-reanimated react-native-gesture-handler react-native-screens react-native-safe-area-context @react-native-community/masked-view
### npm install @react-navigation/stack

Transformar o CSS em componentes
### npm install --save styled-components
Caso der pau na instalação dessa dependencia [https://stackoverflow.com/questions/64573177/unable-to-resolve-dependency-tree-error-when-installing-npm-packages]
### npm install --save --legacy-peer-deps
### npm config set legacy-peer-deps true

Realizar chamada para API
### npm install --save axios