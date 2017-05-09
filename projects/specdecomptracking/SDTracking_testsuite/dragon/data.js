var data = {
  "stats": [
    {
      "series": [
        {
          "data": [
            0.0939,
            0.0559,
            0.0569
          ], 
          "label": "RMSE"
        },
        {
          "data": [
            296200,
            109800,
            53500
          ], 
          "label": "LTUV"
        }
      ], 
      "labels": [
        "Delta Tracking 40 spp", 
        "Spectral Tracking 40 spp", 
        "Spectral and Decomposition tracking 40 spp"
      ], 
      "title": "Translucent Dragon"
    }
  ], 
  "imageBoxes": [
        {
          "elements": [
            {
              "image": "images/dragon4_40spp_naiveRgbDelta.png", 
              "title": "Delta Tracking 40 spp"
            }, 
            {
              "image": "images/dragon4_40spp_newRgbDelta.png", 
              "title": "Spectral Tracking 40 spp"
            }, 
            {
              "image": "images/dragon4_40spp_newRgbDeltaDecomposed.png", 
              "title": "Spectral and Decomposition Tracking 40 spp"
            },
            {
              "image": "images/dragon4_32000spp_newRgbDeltaDecomposed.png", 
              "title": "Ground Truth"
            }
          ], 
          "title": "Comparison"
        }
  ]
}
