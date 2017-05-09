var data = {
    "stats": [
    {
      "series": [
        {
          "data": [
            0.086,
            0.047,
            0.052
          ], 
          "label": "RMSE"
        },
        {
          "data": [
            1422800,
            579600,
            689300
          ], 
          "label": "LTUV"
        }
      ], 
      "labels": [
        "Delta Tracking 8 spp", 
        "Spectral Tracking (history-aware max) 8 spp", 
        "Spectral Tracking (history-aware avg) 8 spp", 
      ], 
      "title": "Color Explosion"
    }
  ], 
  "imageBoxes": [
        {
          "elements": [
            {
              "image": "images/colorExplosion_naive_8spp_rotated.png", 
              "title": "Delta Tracking 8 spp"
            }, 
            {
              "image": "images/colorExplosion_minimaxrgb_8spp_rotated.png", 
              "title": "Spectral Tracking (history-aware max) 8 spp"
            },
            {
              "image": "images/colorExplosion_corravgrgb_8spp_rotated.png", 
              "title": "Spectral Tracking (history-aware average) 8 spp"
            }, 
            {
              "image": "images/colorExplosion_minimaxrgb_32000spp_rotated.png", 
              "title": "Ground Truth"
            }, 
          ], 
          "title": "Comparison"
        }   
  ]
}
