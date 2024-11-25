pipeline {
    agent any

    environment {
        DOCKER_IMAGE = 'php-web'    // Imagen que se construirá para el servicio web
        DOCKER_COMPOSE_FILE = 'docker-compose.yml'  // El archivo docker-compose que usaremos
    }

    stages {
        stage('Clonar Repositorio') {
            steps {
                // Clonamos el código desde el repositorio
                git 'https://github.com/tu-usuario/tu-repositorio.git'
            }
        }

        stage('Construir y Levantar Contenedores') {
            steps {
                script {
                    // Construir la imagen y levantar los contenedores
                    sh 'docker-compose -f ${DOCKER_COMPOSE_FILE} up --build -d'
                }
            }
        }

        stage('Verificar Despliegue') {
            steps {
                script {
                    // Verificar que el contenedor de la aplicación web está funcionando
                    sh 'curl -s http://localhost:8080'
                }
            }
        }
        
        stage('Limpiar Contenedores') {
            steps {
                script {
                    // Detener y eliminar los contenedores después de la ejecución
                    sh 'docker-compose -f ${DOCKER_COMPOSE_FILE} down'
                }
            }
        }
    }
}
